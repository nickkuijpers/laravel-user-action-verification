<?php

namespace Niku\LaravelUserActionVerification\Http;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class UserActionVerification extends Model
{
    protected $table = 'user_action_verification';

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorized()
    {
        return true;
    }	      
}
