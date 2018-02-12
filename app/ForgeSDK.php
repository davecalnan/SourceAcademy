<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Themsaid\Forge\Forge;

class ForgeSDK extends Model
{
    protected $token;

    public function __construct()
    {
        $this->token = config('app.forge_token');
        $this->forge = new Forge($this->token);
    }

    public static function getServer($id)
    {
        return $this->forge->server($id);
    }

    public static function getServers($ids = [])
    {
        if (count($ids)) {
            return collect(array_map(getServer($id), $ids));
        }

        return $this->get->servers();
    }
}
