<?php
namespace Mvc\Core;

use Mvc\Config\Database;
use PDO;
use Mvc\Core\ResourceModelInterface;


    class ResourceModel implements ResourceModelInterface{

        protected $tableName;
        protected $id;
        protected $model;

        //Tạo thông tin đối tượng bảng
        public function _init($tableName, $id, $model)
        {
            $this->tableName = $tableName;
            $this->id        = $id;
            $this->model = $model;
        }
        //Hàm tạo mới đối tượng 
        public function save($model)
        {
            $id = $model->getId();
            $properties = $model->getProperties();

			$properties['created_at'] = date('Y-m-d H:i:s');
            $properties['updated_at'] = date('Y-m-d H:i:s');

            if ($id == null) {
                unset($properties['id']);
                
				$keys = implode(', ', array_keys($properties));
                $values = implode(', :',array_keys($properties));
                
                $sql = "INSERT INTO {$this->tableName} ($keys) VALUES ( :$values)";
                

                $req = Database::getBdd()->prepare($sql);
                
                return $req->execute($properties);
 
            }
            //Nêú không truyền ID thì update
            else {

                unset($properties['created_at']);

                $set = array();
                
	       		foreach (array_keys($properties) as $key => $values) {
					if ($values != 'id') {
						$set[] =  $values . ' = :' . $values;
					}

				}
                    $set = implode(',', $set);
                  
				$sql = "UPDATE {$this->tableName} SET $set WHERE id = :id";
                $req = Database::getBdd()->prepare($sql);
                
				return $req->execute($properties);
			}

        }
        //Hàm xóa 
        public function delete($id)
        {
            $sql = "DELETE FROM $this->tableName WHERE id = $id";
            $req = Database::getBdd()->prepare($sql);
            return $req->execute();
        }
        //Hàm lấy id 
        public function get($id)
        {
           $sql = "SELECT * FROM $this->tableName Where id = $id";
           $req = Database::getBdd()->prepare($sql);
           $req->execute();
           return $req->fetch(PDO::FETCH_OBJ);
        }
        //Hàm 
        public function getAll()
        {
           $sql = "SELECT * FROM $this->tableName";
           $req = Database::getBdd()->prepare($sql);
           
           $req->execute();
           return $req->fetchAll(PDO::FETCH_OBJ);
        }
    }
