<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Eloquent\GoodsRepository as Goods;

class GoodsController extends Controller
{
    private $goods;

    public function __construct(Goods $goods){
        $this->goods = $goods;
    }

    public function index(){
        dd($this->goods->all());
    }

}
