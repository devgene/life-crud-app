<?php


namespace App\Repositories\Serviceclass;

use App\Repositories\Serviceclass\IModelRepository;
use Illuminate\Database\Eloquent\Model;

abstract class AbstractModelRepository implements IModelRepository
{
    CONST PAGE_SIZE=15;
    public $model;

    /**
     * AbstractModelRepository constructor.
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function get($with = [])
    {
        return $this->model->with($with)->latest()->get();
    }

    public function getAsc($with = [])
    {
        return $this->model->with($with)->get();
    }

    public function select($array)
    {
        return $this->model->latest()->select($array)->get();
    }

    public function store($attributes = [])
    {
        if (!empty($attributes)) {

            return $this->model->create($attributes);
        } else
            return false;
    }


    public function find($id)
    {
        return $this->model->find($id);
    }


    public function update(Model $model ,$attributes =[])
    {
        if (!empty($attributes)) {

            $model->update($attributes);
            return $this->model;
        }
        return $this->model;
    }


    public function updateCreate( $arr1 = [] , $arr2 =[])
    {
        return $this->model->updateOrCreate($arr1  , $arr2 );
    }
    public function softDelete(Model $model)
    {
        return $model->delete();
    }

    public function delete($id)
    {
        return $this->model->where('id', $id)->delete();
    }

    public function findOrFail($id)
    {
        return $this->model->findOrFail($id);
    }

     public function whereIn($ids)
    {
        return $this->model->whereIn('id' ,$ids)->get();
    }

    public function where($attr = [])
    {
        return $this->model->where($attr)->get();
    }

    public function whereWithPaginate($attr = [],$page)
    {
        return $this->model->where($attr)->paginate($page);
    }

    public function whereWith($attr = [] , $with = [])
    {
        return $this->model->where($attr)->with($with)->get();
    }

    public function whereWithFirst($attr = [] , $with = [])
    {
        return $this->model->where($attr)->with($with)->first();
    }

    public function wherefirst($attr = [])
    {
        return $this->model->where($attr)->first();
    }

    public function whereOr($attr1  ,  $attr2)
    {
        return $this->model->where($attr1)->orWhere($attr2)->get();
    }

    public function whereOrFirst($attr1  ,  $attr2)
    {
        return $this->model->where($attr1)->orWhere($attr2)->first();
    }

    public function search($request)
    {
        return $this->model->where('name', 'like', '%' . $request['word'] . '%')->latest()->get();
    }


    public function paginate($attr)
    {
        return $this->model->paginate($attr);
    }

    public function destroy($id)
    {
        return $this->model->destroy($id);
    }


    public function orderby($attr, $sort)
    {
        return $this->model->orderBy($attr, $sort)->get();
    }

}
