<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Officer;
use Illuminate\Http\Request;
use App\Utils\HttpMethodUtil;

class AdmOfficerCtlr extends Controller
{
    private $officer;

    public function __construct()
    {
        $this->officer = new Officer();
    }

    public function index(Request $request)
    {
        if (HttpMethodUtil::isMethodGet()) {
            return view('admin.officer.view_all')->with([
                'page' => 'view_all_officer'
            ]);
        }
    }

    public function addOfficer(Request $request)
    {
        if (HttpMethodUtil::isMethodGet()) {
            return view('admin.officer.add')->with([
                'page' => 'add_officer'
            ]);
        }
    }
}
