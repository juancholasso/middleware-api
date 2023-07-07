<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\HookRequest;
use App\Models\Client;

class HookController extends Controller
{
    public function receive(Request $request){
        $queries = $request->query();
        if(!array_key_exists('client_id', $queries) || !array_key_exists('token', $queries)){
            return response()->json(["123"=> 12], 401);
        }

        $client = Client::where(['id' => $queries['client_id'], 'hook_key' => $queries['token']])->first();
        if(!$client){
            return response()->json([], 401);
        }

        $hookRequest = HookRequest::create([
            'client_id' => $client->id,
            "payload" => json_encode($request->all()),
            "hook_received_date" => now(),
        ]);

        $hookRequest->id_hook_identifier = $hookRequest->id;
        $hookRequest->save();

        return $hookRequest;
    }
}
