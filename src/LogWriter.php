<?php

namespace Sdkcodes\Logpress;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LogWriter{

    public function logRequest(Request $request){
        $method = strtoupper($request->getMethod());
        $body = json_encode($request->except($this->avoids()));
        $uri = $request->getPathInfo();

        $message = "{$method} {$uri} - Body: {$body}";
        Log::info($message);

    }

    public function avoids(){
        return [
            'password',
            'pin'
        ];
    }
}