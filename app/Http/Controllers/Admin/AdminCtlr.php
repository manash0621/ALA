<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Utils\HttpMethodUtil;
use App\Utils\JsonUtil;

class AdminCtlr extends Controller
{
    private $admin;

    public function __construct()
    {
       $this->admin = new Admin();
    }

    public function index(Request $request)
    {
        return view('admin.dashboard')->with([
            'page' => 'dashboard',
        ]);
    }

    
    /*
    -------------------------------------------
    Login
    -------------------------------------------
    */

    public function login(Request $request)
    {
        // GET
        if (HttpMethodUtil::isMethodGet()) {
            return view('admin.login');
        }

        // POST
        elseif (HttpMethodUtil::isMethodPost()) {
            
            $username = $request->get('username') ?? '';
            $password = $request->get('password') ?? '';

            if (!$this->admin->isUsernameValid($username)) {
                return JsonUtil::accessDenied();
            }

            $passwordHash = $this->admin->getPassword($username);

            if (!password_verify($password, $passwordHash)) {
                return JsonUtil::accessDenied();
            }

            $admin = $this->admin->getAdminByUsername($username);

            $request->session()->put('admin_id', $admin->id);
            $request->session()->put('admin_role', $admin->role);
            $request->session()->put('admin_abbr', $admin->abbr);

            return JsonUtil::getResponse(true, "Login successfully", JsonUtil::$_STATUS_OK, [
                'admin_id' => $admin->id,
                'admin_role' => $admin->role,
                'admin_abbr' => $admin->abbr
            ]);
        }

        else {
            return JsonUtil::methodNotAllowed();
        }
    }

    /*
    -------------------------------------------
    Logout
    -------------------------------------------
    */

    public function logout(Request $request)
    {
        $request->session()->forget('admin_abbr');
        return redirect('admin/login');
    }

}
