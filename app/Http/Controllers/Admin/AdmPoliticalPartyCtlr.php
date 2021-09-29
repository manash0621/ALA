<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PoliticalParty;
use App\Utils\HttpMethodUtil;
use Illuminate\Http\Request;

class AdmPoliticalPartyCtlr extends Controller
{
    private $politicalParty;

    public function __construct()
    {
        $this->politicalParty = new PoliticalParty();
    }

    public function index(Request $request)
    {
        if (HttpMethodUtil::isMethodGet()) {
            return view('admin.politicalparty.view_all')->with([
                'page' => 'view_all_political_party'
            ]);
        }
    }

    public function addPoliticalParty(Request $request)
    {
        if (HttpMethodUtil::isMethodGet()) {
            return view('admin.politicalparty.add')->with([
                'page' => 'add_political_party'
            ]);
        }
    }
}
