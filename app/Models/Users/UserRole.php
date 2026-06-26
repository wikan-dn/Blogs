<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;

#[Fillable(['name', 'username', 'email', 'password'])]
class UserRole extends Model
{

}
