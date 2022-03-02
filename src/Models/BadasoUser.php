<?php
namespace KodeIngatan\Mudahsenyo\Models;

use Illuminate\Database\Eloquent\Model;

class BadasoUser extends Model
{
    protected $table = "badaso_users" ;
    protected $fillable = [
        'name',
        'email',
        'additional_info',
        'avatar',
        'email_verified_at',
        'password',
    ];
}
