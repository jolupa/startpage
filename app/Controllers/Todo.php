<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TodoModel;

class Todo extends BaseController
{
    public function index()
    {
        $todomodel=new TodoModel();
        if(empty($todos=$todomodel->findall())){
            $data['isempty']=true;
            return view('todo/index', $data);
        } else {
            $data['todos']=$todomodel->orderBy('expired','ASC')->findall();
            return view('todo/index', $data);
        }
    }

    public function new(){
        $todomodel=new TodoModel();
        $data=[
            'todo'=>$this->request->getVar('todo'),
            'expired'=>$this->request->getVar('expired'),
        ];
        $todomodel->save($data);
        return redirect()->to('/');
    }

    public function editordelete(){
        $todomodel=new TodoModel();
        if(!empty($this->request->getVar('option') && $this->request->getVar('option')==='done')){  
            $data=[
                'id'=>$this->request->getVar('id'),
                'done'=>1,
            ];
            $todomodel->save($data);
        }else{
            $data=[
                'id'=>$this->request->getVar('id'),
            ];
            $todomodel->delete($data);
        }
        return redirect()->to('/');
    }
}
