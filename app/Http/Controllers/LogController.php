<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use App\Models\Connection;
use App\Models\Log;
use Illuminate\Http\Request;
use Jenssegers\Agent\Facades\Agent;

//use App\Http\Requests;

class LogController extends Controller {

    public function show() {

        $logs = Log::with('request', 'userAgent')->get();
        $connections = Connection::get();
        return view('log', ['logs' => $logs, 'connections' => $connections]);

    }

    public function parseLog(Request $request) {

        $agent = new Agent();
        $logFilePath = $request->file('file')->store('storage/temp');
        var_dump($logFilePath);


    }

}
