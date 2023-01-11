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
            $data=[
                'isempty'=>true,
            ];
            return view('todo/index', $data);
        } else {
            if(null!==$this->session->get('editid')){
                $id=$this->session->get('editid');
                $data['todotoedit']=$todomodel->where('id',$id)->first();
                $this->session->remove('editid');
            }
            $data['todos']=$todomodel->orderBy('expires','ASC')->findall();
            return view('todo/index', $data);
        }
    }

    public function new(){
        $todomodel=new TodoModel();
        if(!is_null($this->request->getVar('id'))){
            $data['id']=$this->request->getVar('id');
        }
        $data['todo']=$this->request->getVar('todo');
        $data['expires']=$this->request->getVar('expires');
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
        }elseif(!empty($this->request->getVar('option') && $this->request->getVar('option')==='delete')){
            $data=[
                'id'=>$this->request->getVar('id')
            ];
            $todomodel->delete($data);
        }elseif(!empty($this->request->getVar('option') && $this->request->getVar('option')==='edit')){
            $edit=[
                'editid'=>$this->request->getVar('id')
            ];
            $this->session->set($edit);
            return redirect()->to('/');
        }else{
            return redirect()->to('/');
        }
        return redirect()->to('/');
    }
}
