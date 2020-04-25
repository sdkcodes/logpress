<?php

namespace Sdkcodes\Logpress;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LogWriter{

    public function logRequest(Request $request){
        
        $method = strtoupper($request->getMethod());
        $body = json_encode($request->except($this->avoids()));
        $queryParameters = json_encode(collect($request->query())->except($this->avoids()));
        $fullPath = $request->url();
        $uri = $request->getPathInfo();
        $scheme = $request->getScheme();
        
        $message = "{$method} {$uri} - Body: {$body} Query: {$queryParameters} Full path: {$fullPath} Scheme: {$scheme}";
        Log::info($message);

    }

    public function avoids(){
        return config('logpress.avoids');
    }
}