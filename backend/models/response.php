<?php
class Response {
    public int $status;
    public int $total;
    
    public string $message;
    
    public $data;
    public static function Success($data, $total, $message){
        $response = new Response();
        $response->status = 200;
        $response->data = $data;
        $response->total = $total;
        $response->message = $message;
        return $response;
    }

    public static function Fail($message){
        $response = new Response();
        $response->status = 500;
        $response->message = $message;
        return $response;
    }
}
