<?php 


class ApiResponse{

    // Standardized success response
    public static function success($data, $message = "Success", $code = 200){
        return response()->json([
            'status' => 'success',
            'message' => $message,
            'data' => $data
        ], $code);
    }


    // Standardized error response
    public static function error($message = "Error", $code = 400, $data = null){
        return response()->json([
            'status' => 'error',
            'message' => $message,
            'data' => $data
        ], $code);
    }
}