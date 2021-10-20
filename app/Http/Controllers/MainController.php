<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MainController extends Controller
{
    public function index(Request $request)
    {
        $html = $this->render($request->path());

        return view('welcome', [
            "html" => $html
        ]);
    }

    private function render($path)
    {
        //get the vue server renderer script
        $renderer_source = File::get(base_path('node_modules/vue-server-renderer/basic.js'));

        //get the server entry point
        $app_source = File::get(public_path('js/entry-server.js'));

        $v8 = new \V8js();

        ob_start();
        //define some local variables
        $js =
        <<<EOT
        var process = { env: { VUE_ENV: "server", NODE_ENV: "production" } };
        this.global = { process: process };
        var url = "$path";
        EOT;

        $v8->executeString($js);
        $v8->executeString($renderer_source);
        $v8->executeString($app_source);

        return ob_get_clean();
    }
}
