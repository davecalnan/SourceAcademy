<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    public $fillable = ['id', 'organisation_id', 'name'];

    public function organisation()
    {
        return $this->belongsTo('App\organisation');
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
