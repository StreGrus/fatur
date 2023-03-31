<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profile;

class UserManagementController extends Controller
{
    //
    public function index () {
        $profile = profile::all();
        return view ('profile', compact('profile'));
    }
}
