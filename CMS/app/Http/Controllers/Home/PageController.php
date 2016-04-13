<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends AbstractConroller
{
    public function __construct(){
        $this->setPermissions([
            'create'=>'edit',
            'store'=>'edit',
            'edit'=>'edit',
            'update'=>'edit',
            'destroy'=>'edit',
        ]);
        parent::__construct();
    }

   public function index(){
       Session::flash('','');
       Session::reflash();

       return Redirect::to('pages/home');
   }

    public function create(){
        return view::make('pages.create');
    }

    public function store(){
       $input = array_merge($this->getInput(),['user_id'=>Credentials]);
    }
}
