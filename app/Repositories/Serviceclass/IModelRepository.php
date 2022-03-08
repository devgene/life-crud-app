<?php


namespace App\Repositories\Serviceclass;


use Illuminate\Database\Eloquent\Model;

interface IModelRepository
{

    public function find($id);

    public function findOrFail($id);

    public function delete($id);

    public function get();

    public function whereOrFirst($attr1  ,  $attr2);

    public function whereWithFirst($attr = [] , $with = []);

    public function whereWith($attr = [] , $with = []);

    public function store($attributes = []);

    public function wherefirst($attr = []);

    public function whereOr($attr1  ,  $attr2);

    public function where($attr = []);

    public function whereWithPaginate($attr = [],$page);

    public function update( Model $model ,$attributes = []);

    public function softDelete(Model $model);

    public function updateCreate( $arr1 = [] , $arr2 =[]);

    public function paginate( $attr);

    public function destroy($id);

    public function orderby($attr, $sort);

}
