<?php

namespace App\Http\Controllers;

abstract class Controller
{
    // --- IGNORE ---
    //First we need to create the controller that will handle the API requests for tickets. We can do this by running the following command:
    //php artisan make:controller Api/TicketController
    // This will create a new controller file at app/Http/Controllers/Api/TicketController.php
    // --- IGNORE ---

    protected function apiResponse($data, $status = 200)
    {
        return response()->json($data, $status);
    }

    protected function success($data, $status = 200)
    {
        return $this->apiResponse(['success' => true, 'data' => $data], $status);
    }

    protected function error($data, $status = statusCode::HTTP_BAD_REQUEST)
    {
        return $this->apiResponse(['success' => false, 'error' => $data], $status);
    }

    protected function successJsonResponse($data, $status = statusCode::HTTP_OK)
    {
        return response()->json($data, $status);
    }

    protected function errorJsonResponse($data, $status = statusCode::HTTP_BAD_REQUEST)
    {
        return response()->json($data, $status);
    } 
    
    protected function successJsonResponseJson($data, $status = statusCode::HTTP_OK)
    {
        return response()->json($data, $status);
    }

}
