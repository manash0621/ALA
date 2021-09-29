<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Constituency;
use App\Utils\HttpMethodUtil;
use Illuminate\Http\Request;

class AdmConstituencyCtlr extends Controller
{
    private $constituency;

    public function __construct()
    {
        $this->constituency =  new Constituency();
    }

    public function index(Request $request)
    {
        if (HttpMethodUtil::isMethodGet()) {
            return view('admin.constituency.view_all')->with([
                'page' => 'view_all_constituency'
            ]);
        }
    }

    public function addConstituency(Request $request)
    {
        if (HttpMethodUtil::isMethodGet()) {
            return view('admin.constituency.add')->with([
                'page' => 'add_constituency'
            ]); 
        }
    }
}
