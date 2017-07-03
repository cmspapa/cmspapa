<?php

namespace Cmspapa\Install\Controllers;

use Illuminate\Http\Request;
use Cmspapa\Core\Controllers\Controller;

class InstallController extends Controller
{
	/**
     * .
     *
     * @return view
     */
    public function getInstall()
    {
    	// Check if configuration exists load page otherwise run installer
    	return view('install::install_db');
    }

    /**
     * .
     *
     * @return redirect
     */
    public function postInstall(Request $request)
    {
	    $path = base_path('.env');

	    // @todo check foreach database and add its settings

	    if (file_exists($path)) {
	    	// DB connection
		    file_put_contents($path, str_replace(
		        'DB_CONNECTION='.config('database.default'), 'DB_CONNECTION='.$request->db_connection, file_get_contents($path)
		    ));

		    // DB host
		    file_put_contents($path, str_replace(
		        'DB_HOST='.config('database.connections.'.config('database.default').'.host'), 'DB_HOST='.$request->db_host, file_get_contents($path)
		    ));

		    // DB port
		    file_put_contents($path, str_replace(
		        'DB_PORT='.config('database.connections.'.config('database.default').'.port'), 'DB_PORT='.$request->db_port, file_get_contents($path)
		    ));

		    // DB name
		    file_put_contents($path, str_replace(
		        'DB_DATABASE='.config('database.connections.'.config('database.default').'.database'), 'DB_DATABASE='.$request->db_name, file_get_contents($path)
		    ));

		    // DB username
		    file_put_contents($path, str_replace(
		        'DB_USERNAME='.config('database.connections.'.config('database.default').'.username'), 'DB_USERNAME='.$request->db_username, file_get_contents($path)
		    ));

		    // DB password
		    file_put_contents($path, str_replace(
		        'DB_PASSWORD='.config('database.connections.'.config('database.default').'.password'), 'DB_PASSWORD='.$request->db_password, file_get_contents($path)
		    ));
		}

		return 'done';
    }
}
