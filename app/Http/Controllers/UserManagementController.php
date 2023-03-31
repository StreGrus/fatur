<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_management;

class UserManagementController extends Controller
{
    //
    public function index () {
        $datauser = user_management::all();
        return view ('user-management', compact('datauser'));
    }
}
