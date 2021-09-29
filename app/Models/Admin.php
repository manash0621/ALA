<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Admin extends Model
{
    use HasFactory;
    protected $admin = "admin";

    /*
    -----------------------------------
    CHECK
    -----------------------------------
    */

    public function isUsernameValid(string $username)
    {
        return DB::table($this->admin)->where('username', $username)->count() > 0;
    }

    /*
    -----------------------------------
    READ
    -----------------------------------
    */

    public function getAdmin(int $id)
    {
        return DB::table($this->admin)->where('id', $id)->first();
    }

    public function getIdByUsername(string $username)
    {
        return DB::table($this->admin)->where('username', $username)->first('id')->id;
    }

    public function getAdminByUsername(string $username)
    {
        return DB::table($this->admin . ' as a')
            ->select(
                'a.*',
                'r.role',
                'r.abbr'
            )
            ->leftJoin('role_admin as r', 'a.role_id', '=', 'r.id')
            ->where('username', $username)
            ->first();
    }

    public function getPassword(string $username)
    {
        return DB::table($this->admin)->where('username', $username)->first('password')->password;
    }
}
