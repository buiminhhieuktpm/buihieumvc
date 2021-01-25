<?php
namespace Mvc\Models;

use Mvc\Core\Model;

class TaskModel extends Model{

     //Thuộc tính 
     protected $id;
     protected $title;
     protected $description;
     protected $created_at;
     protected $updated_at;
     
     //Các hàm get() thuộc tính task
     public function setId($id)
     {
          $this->id = $id;
     }
     
     public function getId()
     {
          return $this->id;
     }

     public function setTitle($title)
     {
          $this->title = $title;
     }

     public function getTitle()
     {
          return $this->title;
     }
     
     //Các hàm set() thuộc tính task 
     public function setDescription($description)
     {
          $this->description = $description;
     }

     public function getDescription()
     {
          return $this->description;
     }
     
     public function setCreate($created_at)
     {
          $this->created_at =$created_at;
     }

     public function getCreate()
     {
          return $this->created_at;
     }
     
     public function setUpdate($updated_at)
     {
          $this->updated_at= $updated_at;
     }

     public function getUpdate()
     {
          return $this->updated_at;
          }
}
