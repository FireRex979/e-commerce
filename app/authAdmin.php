<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class authAdmin extends Authenticatable
{
    protected $table='admins';
}