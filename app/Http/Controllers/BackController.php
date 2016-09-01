<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Auth;

class BackController extends Controller
{
    public function index()
    {
        // $user = Auth::user();
        // dd($user);
        dd($_SERVER["REMOTE_ADDR"]);
    }
}
