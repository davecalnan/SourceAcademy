<?php

namespace App\Http\Controllers;

use App\Organisation;
use App\Server;
use Illuminate\Http\Request;

class OrganisationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Organisation  $organisation
     * @return \Illuminate\Http\Response
     */
    public function show(Organisation $organisation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Organisation  $organisation
     * @return \Illuminate\Http\Response
     */
    public function edit(Organisation $organisation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Organisation  $organisation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organisation $organisation)
    {
        $organisation->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Organisation  $organisation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organisation $organisation)
    {
        //
    }

    public function setUpWordPress(Organisation $organisation, Request $request)
    {
        $forge = new \Themsaid\Forge\Forge(config('app.forge_token'));

        // $server = $this->createServer($forge, $request->size, $request->slug);
        $server = $forge->server(182513);
        $database = $this->createWordPressDatabase($forge, $server, $request->slug);
        $user = $this->createWordPressDatabaseUser($database, $forge, $server, $request->slug);
        $site = $this->createWordPressSite($database, $forge, $server, $request->slug, $user);
        // $site = $forge->site(179264, 476204);
        $sslCert = $this->getSSLCert($forge, $server, $site);
        $sslCert = $this->activateSSLCert($forge, $server, $site, $sslCert);

        Server::create([
            'id' => $server->id,
            'organisation_id' => $organisation->id,
            'name' => $server->name
        ]);

        return ['server' => $server, 'database' => $database, 'user' => $user, 'site' => $site];
    }

    protected function createServer($forge, $serverSize, $slug)
    {
        $serverName = $slug . '-machine';

        $server = $forge->setTimeout(600)->createServer([
            'provider' => 'ocean2',
            'credential_id' => 24884,
            'name' => $serverName,
            'size' => $serverSize,
            'php_version' => 'php71',
            'region' => 'lon1'
        ], $wait = true);

        sleep(550);

        $name = config('app.ssh_key_name');
        $key = config('app.ssh_key');

        $forge->setTimeout(600)->createSSHKey($server->id, ['name' => $name, 'key' => $key], $wait = true);

        return $server;
    }

    protected function createWordPressDatabase($forge, $server, $slug)
    {
        $name = 'wp_' . $slug;

        return $forge->setTimeout(600)->createMysqlDatabase($server->id, ['name' => $name], $wait = true);
    }

    protected function createWordPressDatabaseUser($database, $forge, $server, $slug)
    {
        $name = 'wp_' . $slug;
        $password = 'password';
        $databases = [$database->id];

        return $forge->setTimeout(600)->createMysqlUser($server->id, ['name' => $name, 'password' => $password, 'databases' => $databases], $wait = true);
    }

    protected function createWordPressSite($database, $forge, $server, $slug, $user)
    {
        $domain = $slug . '.sourceacademysites.com';
        $project_type = 'php';
        $directory = '/public';

        $site = $forge->setTimeout(600)->createSite($server->id, ['domain' => $domain, 'project_type' => $project_type, 'directory' => $directory,], $wait = true);

        $database = $database->name;
        $user = $user->id;
        $site->installWordPress(['database' => $database, 'user' => $user]);

        return $site;
    }

    protected function getSSLCert($forge, $server, $site)
    {
        $domains = [$site->name];

        return $forge->setTimeout(600)->obtainLetsEncryptCertificate($server->id, $site->id, ['domains' => $domains], $wait = true);
    }

    protected function activateSSLCert($forge, $server, $site, $sslCert)
    {
        $forge->setTimeout(600)->activateCertificate($server->id, $site->id, $sslCert->id, $wait = true);
    }
}
