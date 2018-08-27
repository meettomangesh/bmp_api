<?php

namespace Api\Controllers;

use Api\Controllers\ApiController;

//use Api\Models\Customer;
//use Api\Services\Oauth2\Oauth;

class HomepageController extends ApiController
{

    public function showTest()
    {
        // allow a maximum of 100 requests for the IP in 5 minutes
        //$accessToken = $this->getOauthAccessToken();
        $this->limitApiRequestsInMinutes(2, 1);
        $response = $this->validateOauthRequest();
        $oauthUser = $this->getOauthUser();
        $this->response->setContent(json_encode(array('success' => true, 'message' => 'You accessed my APIs!', 'token' => $oauthUser['user_id']))); // send response in json format
    }

    public function show()
    { 
        $content = "<h1>Welcome ".getenv('API_NAME')." API</h1>";

        try {
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        $this->response->setContent(json_encode($content));
    }
}