<?php 
    require_once(dirname(__FILE__) ."../config/repository.php");

    class ProductService
    {
        private Repository $repository;
        public function __construct(Repository $var ) 
        {
            $this->repository = $var;
        }
    }
?>