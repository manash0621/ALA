<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Session;
use App\Utils\HttpMethodUtil;
use Illuminate\Http\Request;

class AdmSessionCtlr extends Controller
{
    private $session;

    public function __construct()
    {
        $this->session = new Session();
    }

    public function index (Request $request)
    {
        if (HttpMethodUtil::isMethodGet()) {
            return view('admin.session.view_all')->with([
                'page' => 'view_all_session',
            ]);
        }
    }

    public function addSession (Request $request)
    {
        if (HttpMethodUtil::isMethodGet()) {
            return view('admin.session.add')->with([
                'page' => 'add_session',
            ]);
        }
    }
}
