<?php 
    require_once "../config/repository.php";
    require_once "../models/response.php";

    class ProductService
    {
        private Repository $repository;
        public function __construct(Repository $var ) 
        {
            $this->repository = $var;
        }

        public function Read()
        {
            try
            {
                $result = $this->repository->Read("product");
                return Response::Success($result, count($result), "Successfully");
            }catch(Exception $ex)
            {
                return Response::Fail($ex->getMessage());
            }
        }
    }
    $test = new ProductService(new Repository());
    $result = $test->Read();
    print_r($result);
?>