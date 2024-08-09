<?php

namespace App\Http\Trait;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

trait ApiCaller
{
    // PARSE GET API
    public function get($endpoint, $params = [], $version = VERSION_1, $withHeaders = false, $headers = [], $accept = "application/json")
    {
        $token = Session::get('token');
        $response = Http::accept($accept);
        // IF HAS TOKEN
        if (isset($token) && !empty($token)) {
            $response = $response->withToken($token);
        }
        // IF HAS HEADERS
        if ($withHeaders) {
            $response = $response->withHeaders($headers);
        }
        $response = $response->get(API_BASE_URL . $version . $endpoint . '?' . http_build_query($params));
        return $this->sendApiResponse($response);
    }

    // PARSE POST API
    public function post($endpoint, $params, $version = VERSION_1, $withHeaders = false, $headers = [], $isFile =  false, $files = [], $accept = "application/json")
    {
        $token = Session::get('token');
        $response = Http::accept($accept);
        // IF HAS TOKEN
        if (isset($token) && !empty($token)) {
            $response = $response->withToken($token);
        }
        // IF HAS HEADERS
        if ($withHeaders) {
            $response = $response->withHeaders($headers);
        }
        // IF HAS FILES
        if ($isFile) {
            foreach ($files as $file) {
                $response = $response->attach($file['paramName'], file_get_contents($file['fileParam']), $file['fileName']);
            }
        }
        $response = $response->post(API_BASE_URL . $version . $endpoint, $params);
        return $this->sendApiResponse($response);
    }

    // PARSE PUT API
    public function put($endpoint, $params, $version = VERSION_1, $withHeaders = false, $headers = [], $isFile =  false, $files = [], $accept = "application/json")
    {
        $token = Session::get('token');
        $response = Http::accept($accept);
        // IF HAS TOKEN
        if (isset($token) && !empty($token)) {
            $response = $response->withToken($token);
        }
        // IF HAS HEADERS
        if ($withHeaders) {
            $response = $response->withHeaders($headers);
        }
        // IF HAS FILES
        if ($isFile) {
            foreach ($files as $file) {
                $response = $response->attach($file['paramName'], file_get_contents($file['fileParam']), $file['fileName']);
            }
        }
        $response = $response->put(API_BASE_URL . $version . $endpoint, $params);
        return $this->sendApiResponse($response);
    }

    // PARSE PATCH API
    public function patch($endpoint, $params, $version = VERSION_1, $withHeaders = false, $headers = [], $isFile =  false, $files = [], $accept = "application/json")
    {
        $token = Session::get('token');
        $response = Http::accept($accept);
        // IF HAS TOKEN
        if (isset($token) && !empty($token)) {
            $response = $response->withToken($token);
        }
        // IF HAS HEADERS
        if ($withHeaders) {
            $response = $response->withHeaders($headers);
        }
        // IF HAS FILES
        if ($isFile) {
            foreach ($files as $file) {
                $response = $response->attach($file['paramName'], file_get_contents($file['fileParam']), $file['fileName']);
            }
        }
        $response = $response->patch(API_BASE_URL . $version . $endpoint, $params);
        return $this->sendApiResponse($response);
    }

    // PARSE DELETE API
    public function delete($endpoint, $version = VERSION_1, $withHeaders = false, $headers = [], $params = [], $accept = "application/json")
    {
        $token = Session::get('token');
        $response = Http::accept($accept);
        // IF HAS TOKEN
        if (isset($token) && !empty($token)) {
            $response = $response->withToken($token);
        }
        // IF HAS HEADERS
        if ($withHeaders) {
            $response = $response->withHeaders($headers);
        }
        $response = $response->delete(API_BASE_URL . $version . $endpoint);
        return $this->sendApiResponse($response);
    }

    // SEND MODIFIED RESPONSE TO FRONT
    protected function sendApiResponse($APIResponse)
    {
        if ($APIResponse->ok()) {
            $result = array('status' => true, 'status_code' => $APIResponse->status(), 'data' => $APIResponse->json());
        } else if ($APIResponse->created()) {
            $result = array('status' => true, 'status_code' => $APIResponse->status(), 'data' => $APIResponse->json());
        } else if ($APIResponse->noContent()) {
            $result = array('status' => true, 'status_code' => $APIResponse->status(), 'data' => $APIResponse->json());
        } else if ($APIResponse->badRequest()) {
            $result = array('status' => false, 'status_code' => $APIResponse->status(), 'message' => 'Bad request !', 'error' => $APIResponse->json());
        } else if ($APIResponse->unauthorized()) {
            $result = array('status' => false, 'status_code' => $APIResponse->status(), 'message' => 'Unauthorized request !', 'error' => $APIResponse->json());
        } else if ($APIResponse->forbidden()) {
            $result = array('status' => false, 'status_code' => $APIResponse->status(), 'message' => 'Permission denied request !', 'error' => $APIResponse->json());
        } else if ($APIResponse->notFound()) {
            $result = array('status' => false, 'status_code' => $APIResponse->status(), 'message' => 'Request not found !', 'error' => $APIResponse->json());
        } else if ($APIResponse->status() === 405) {
            $result = array('status' => false, 'status_code' => $APIResponse->status(), 'message' => 'Request method not allowed !', 'error' => $APIResponse->json());
        } else if ($APIResponse->requestTimeout()) {
            $result = array('status' => false, 'status_code' => $APIResponse->status(), 'message' => 'Request timeout !', 'error' => $APIResponse->json());
        } else if ($APIResponse->serverError()) {
            $result = array('status' => false, 'status_code' => $APIResponse->status(), 'message' => 'Server error request !', 'error' => $APIResponse->json());
        } else {
            $result = array('status' => false, 'status_code' => $APIResponse->status(), 'message' => 'Error in request !', 'error' => $APIResponse->json());
        }
        return $result;
    }
}
