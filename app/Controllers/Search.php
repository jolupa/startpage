<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Search extends BaseController
{
    public function index()
    {
        return view('search/index');
    }

    public function wheretosearch(){
        if(!empty($this->request->getVar('search'))&&$this->request->getVar('search')==='true'&&!empty($this->request->getVar('keyword'))){
            if($this->request->getVar('provider')==='duck'){
                return redirect()->to('https://duckduckgo.com/?q='.$this->request->getVar('keyword'));
            }elseif($this->request->getVar('provider')==="imdb"){
                return redirect()->to('https://imdb.com/find?q='.$this->request->getVar('keyword'));
            }elseif($this->request->getVar('provider')==="diccionaricat"){
                return redirect()->to('https://www.diccionari.cat/cerca/gran-diccionari-de-la-llengua-catalana?search_api_fulltext_cust=&search_api_fulltext_cust_1='.$this->request->getVar('keyword'));
            }else{
                return redirect()->to('https://google.com/search?q='.$this->request->getVar('keyword'));
            }
        }else{
            return redirect()->to('/');
        }
    }
}
