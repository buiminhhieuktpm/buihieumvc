<?php
namespace Mvc\Core;

    interface ResourceModelInterface{
        //Các hàm chung cho các bảng khác nhau 
        public function _init($nameTable, $id, $modelName);
        public function save($modelName);
        public function delete($id);
        public function get($id);
        public function getAll();
    }
