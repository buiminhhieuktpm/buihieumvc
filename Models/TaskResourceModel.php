<?php
namespace Mvc\Models;

use Mvc\Core\ResourceModel;
use Mvc\Models\TaskModel;

    Class TaskResourceModel extends ResourceModel{

        public function __construct()
        {
           parent::_init('tasks', 'id', new TaskModel());
        }
    }


