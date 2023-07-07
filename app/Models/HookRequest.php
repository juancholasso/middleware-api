<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HookRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        "client_id",
        "id_hook_identifier",
        "payload",
        "hook_received_date",
        "api_success",
        "api_status",
        "api_response",
        "api_attempt",
        "api_request_date"
    ];
}
