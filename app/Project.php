<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'projects';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'name', 'slug', 'type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
      //
    ];

    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function sites()
    {
        return $this->hasMany('App\Site');
    }

    public function users()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }

    public function createWordpressSite($slug)
    {
        $serverDoesNotExist = !$client->hasServer();

        if ($serverDoesNotExist) {
            createServer('basic');
            $server = $createdServer;
        }

        $server->createMySQL($database = 'wp_' . $slug, $user = 'wp_' . $slug);
        $server->createSite($slug . '.sourceacademysites.com');

        $hover->createRecord('A', $server->IP, $ttl = 30);

        $wordpress->createUser('sourceacademy', $randomPassword);
        $wordpress->createUser($project->sourceror);
        $wordpress->createUser($project->client);

        $server->createNginxConfig($clientDomain, $slug.sourceacademysites.com);
    }
}
