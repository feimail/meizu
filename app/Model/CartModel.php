<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CartModel extends Model
{
    //
    use SoftDeletes;
	protected $dates = ['deleted_at'];
    protected $table = 'meizu_cart';
    protected $fillable = [];
    protected $hidden = [
    	'deleted_at'
    ];
    protected static function boot()
    {
        parent::boot();
    }
}
