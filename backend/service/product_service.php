<?php 
    require_once "../config/repository.php";
    require_once "../models/response.php";
    require_once "../model/entity.php";

    class ProductService
    {
        private Repository $repository;
        public function __construct(Repository $var) 
        {
            $this->repository = $var ?? throw new Exception("Repository is null");
        }

        public function ReadAll()
        {
            try
            {
                header('Content-Type: application/json');
                $result = $this->repository->ReadAll(Entity::Product);
                $response = Response::Success($result, count($result), "Successfully");
            }catch(Exception $ex)
            {
                return Response::Fail($ex->getMessage());
            }
            // Return JSON response
            echo json_encode($response);
        }

        public function Read(string $id)
        {
            try
            {
                header('Content-Type: application/json');
                $result = $this->repository->Read(Entity::Product, $id);
                $response = Response::Success($result, count($result), "Successfully");
            }catch(Exception $ex)
            {
                return Response::Fail($ex->getMessage());
            }
            // Return JSON response
            echo json_encode($response);
        }
        
        public function Create($product)
        {
            try
            {
                $result = $this->repository->Create(Entity::Product, $product);
                
            }catch(Exception $ex)
            {
                return Response::Fail($ex->getMessage());
            }
        }
    }


    // Handle API requests
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $service = new ProductService(new Repository());
        $service->ReadAll();
    } else {
        http_response_code(405); // Method Not Allowed
        echo json_encode(["message" => "Method not allowed"]);
    }
?>