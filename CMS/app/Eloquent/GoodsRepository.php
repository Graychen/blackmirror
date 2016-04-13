<?php
namespace App\Eloquent;
use App\Eloquent\Repository;

class GoodsRepository extends Repository{
    function model(){
        return 'App\Goods';
    }
}