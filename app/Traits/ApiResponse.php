<?php
namespace App\Traits;
use Illuminate\Http\Response;

trait ApiResponse{
    public function successResponse($data, $code = Response::HTTP_OK){
        return response()->json(['data' => $data, 'site' => 2]);
    }
    public function successResponse2(){
        return 'New record has been added to the database.';
    }

    public function successResponse3(){
        return 'A record has been updated';
    }

    public function successResponse4(){
        return 'A record has been deleted';
    }
//    public function successCreated(){
//        return response()
//    }
    public function errorResponse($message, $code){
        return response()->json(['error' => $message, 'site' => 2, 'code' => $code], $code);
    }
}


?>
