<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    public $fillable = ['id', 'client_id', 'name'];

    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function sites()
    {
        return $this->hasMany('App\Site');
    }

    public function getServer($id)
    {
        return $this->forge->server($id);
    }

    public function getServers($ids = [])
    {
        if (count($ids)) {
            return collect(array_map(getServer($id), $ids));
        }

        return $this->get->servers();
    }
}
