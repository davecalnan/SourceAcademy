<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Freelancer extends Model
{
    protected $table = 'freelancers';

    protected $fillable = [
        'user_id', 'title', 'shopify', 'wordpress'
    ];

    public static function boot()
    {
        parent::boot();

        self::creating(function($model){

        });
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
