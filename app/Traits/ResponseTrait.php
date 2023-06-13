<?php
 namespace App\Traits;



 use Illuminate\Http\JsonResponse;

 trait ResponseTrait{

     /**
      * @param array|null $data
      * @param string $message
      * @param $status_code
      * @return JsonResponse
      */
     public function responseSuccess(array|null $data, string $message = "successful", $status_code = null)
     {
         return response()->json([
             'status' => true,
             'status_code' => $status_code,
             'message' => $message,
             'data' => $data,
             'errors' => null
         ]);
     }
     /**
      * error response
      *
      * @param array|object $error
      * @param $message
      * @return JsonResponse
      */
     public function responseError($error, string $message = "Data is invalid", $status_code = null)
     {
         return response()->json([
             'status' => false,
             'status_code' => $status_code,
             'message' => $message,
             'data' => null,
             'errors' => $error
         ]);
     }
 }
