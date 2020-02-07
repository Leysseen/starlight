<?php


namespace App\Repositories;


Abstract class ResourceRepository
{
    protected $model;

    public function store(array $inputs)
    {
        $this->model->create($inputs);
    }

    public function update(int $id, array $inputs)
    {
        $this->getById($id)->update($inputs);
    }

    public function getPaginate(int $nb)
    {
        return $this->model->paginate($nb);
    }

    public function getById(int $id)
    {
        return $this->model->findOrFail($id);
    }

    public function destroy(int $id)
    {
        $this->getById($id)->delete();
    }
}
