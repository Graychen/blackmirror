<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Middleware\Auth\Blog;
use App\Http\Middleware\Auth\Edit;
use App\Http\Requests;
use App\Http\Controllers\Controller;

abstract class AbstractConroller extends Controller
{
    protected $edits = [];

    protected $blogs = [];

    public function __construct(){
        parent::__construct();

        if($this->edits){
            $this->middleware(Edit::class,['only'=>$this->edits]);
        }
        if($this->blogs){
            $this->middleware(Blog::class,['only'=>$this->blogs]);
        }
    }
}
