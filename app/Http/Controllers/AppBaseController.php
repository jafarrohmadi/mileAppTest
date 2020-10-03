<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

/**
 * This class should be parent class for other API controllers
 * Class AppBaseController
 */
class AppBaseController extends Controller
{
    public function sendResponse($result, $message)
    {
        $response = [
            'status'  => true,
            'message' => $message,
            'data'    => $result,
        ];

        return response($response, 200);
    }

    public function sendError($error, $code = 404)
    {
        $response = [
            'status'  => false,
            'message' => 'Failed',
            'data'    => $error,
        ];

        return response($response, $code);
    }
}
