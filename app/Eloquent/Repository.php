<?php
namespace App\Eloquent;
use App\Contracts\RepositoryInterface;
use App\Exceptions\RepositoryException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Container\Container as App;
abstract class Repository implements RepositoryInterface{
    private $app;
    protected $model;

    public function __construct(App $app){
        $this->app = $app;
        $this->makeModel();
    }

    abstract function model();

    /**
     * @param array $columns
     * @return mixed
     */
    public function all($columns = array('*')) {
        return $this->model->get($columns);
    }


    public function paginate($perPage=15,$columns=array('*')){
        return $this->model->paginate();
    }

    public function create(array $data){
        return $this->model->create($data);
    }

    public function update(array $data,$attribute="id"){
        return $this->model->where($attribute,'=',$id)->update($data);
    }

    public function delete($id){
        return $this->model->destroy($id);
    }

    public function find($id,$columns = array('*')){
        return $this->model->find($id,$columns);
    }

    public function findBy($attribute,$value,$columns=array('*')){
        return $this->model->where($attribute,'=',$value)->first($columns);
    }

    public function makeModel(){
        $model = $this->app->make($this->model());
        if(!$model instanceof Model){
            throw new RepositoryException("Class {$this->model()} must be an instance of Illuminate\\Database\\Eloquent\\Model");
            return $this->model = $model;
        }
    }

}
