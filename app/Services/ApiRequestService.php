<?php

namespace App\Services;

use App\Models\HookRequest;
use App\Models\ApiConfiguration;

class ApiRequestService extends Controller
{


    public function __construct(CognitoService $cognitoService)
    {
        parent::__construct(new Client());
        $this->cognitoService = $cognitoService;
    }

    public function runJobSendRequestsApi(){

    }

    public function sendRequestApi(HookRequest $request){
        $token = ($this->getToken())->data->token;
    }

    public function getToken(){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://esl-eu.zkong.com/zk/user/login',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'{
            "account": "wemake01",
            "loginType": 3,
            "password": "fXTI2usJ4jTT7wzWDWLb4mUR1BFZRhScsJhkrR+RxeyP1Syw6msAtmbTHWWjdOs+PRMgMY6ehTk3Smym8D/u9DrBR7Pcx86F42RkXKA4uOpleyQCkUZzXa4OUQC8fc/sxw7C5D/OT9IEZNDUVpgd0O3/5vqHSUDBD6maaWaCzHU="
            }',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);
        return json_decode($response);
    }
}
