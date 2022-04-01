<?php

namespace Rxak\App\Models;

use \Rxak\Framework\Models\GetFromRoute;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use GetFromRoute;
}