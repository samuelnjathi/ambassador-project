<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;




class DashboardController extends Controller
{
    public function redirect(){
        return view('dashboard.index');
}
}
