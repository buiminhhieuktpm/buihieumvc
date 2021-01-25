<?php
namespace Mvc\Models;

use Mvc\Models\TaskResourceModel;

class TaskRepository 
{
    protected $taskResourceModel;

    //Hàm khởi tạo
    public function __construct()
    {
        $this->taskResourceModel = new TaskResourceModel();
    }

    //Hàm tạo 
    public function add($model) {;
        return $this->taskResourceModel->save($model);
    }

    
    public function edit($model) {

        return $this->taskResourceModel->save($model);
    }

    public function delete($id){
        return $this->taskResourceModel->delete($id);
    }

    public function get($id){
        return $this->taskResourceModel->get($id);
    }

    public function getAll()
    {
        return $this->taskResourceModel->getAll();
    }

    
}
