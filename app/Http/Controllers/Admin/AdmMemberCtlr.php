<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Utils\HttpMethodUtil;
use Illuminate\Http\Request;

class AdmMemberCtlr extends Controller
{
    private $member;

    public function __construct()
    {
        $this->member = new Member();
    }

    public function index(Request $request)
    {
        if (HttpMethodUtil::isMethodGet()) {
            return view('admin.member.view_all')->with([
                'page' => 'view_all_member'
            ]);
        }
    }

    public function addMember(Request $request)
    {
        if (HttpMethodUtil::isMethodGet()) {
            return view('admin.member.add')->with([
                'page' => 'add_member',
            ]);
        }
    }
}
