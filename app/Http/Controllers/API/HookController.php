<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\HookRequest;

class HookController extends Controller
{
    public function receive(Request $request){
        $hookRequest = HookRequest::create([
            "payload" => json_encode($request->all()),
            "hook_received_date" => now(),
        ]);

        $hookRequest->id_hook_identifier = $hookRequest->id;
        $hookRequest->save();

        return $hookRequest;
    }
}
