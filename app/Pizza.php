<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime',
    ];

    public function toppings()
    {
        return $this->hasMany('App\Topping');
    }
}
