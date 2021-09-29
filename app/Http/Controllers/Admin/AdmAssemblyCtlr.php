<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Assembly;
use App\Utils\HttpMethodUtil;
use Illuminate\Http\Request;

class AdmAssemblyCtlr extends Controller
{
    private $assembly;

    public function __construct()
    {
        $this->assembly = new Assembly();
    }

    public function index (Request $request)
    {
        if (HttpMethodUtil::isMethodGet()) {
            return view('admin.assembly.view_all')->with([
                'page' => 'view_all_assembly'
            ]);
        }
    }

    public function addAssembly (Request $request)
    {
        if (HttpMethodUtil::isMethodGet()) {
            return view('admin.assembly.add')->with([
                'page' => 'add_assembly',
            ]);
        }
    }
}
