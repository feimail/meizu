<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PasswordResets extends Model
{
	//添加软删除
	use SoftDeletes;
	protected $dates = ['deleted_at'];
    protected $table = 'password_resets';
}
