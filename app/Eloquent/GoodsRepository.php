<?php
namespace App\Eloquent;

use App\Contracts\RepositoryInterface;
use App\Eloquent\Repository;
class GoodsRepository extends Repository{
    function model(){
        return 'App\Model\Goods';
    }
}