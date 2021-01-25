<?php
namespace Mvc\Core;

    class Model
    {
        //Lấy thuộc tính
        public function getProperties()
        {
            return get_object_vars($this);
        }
    }
