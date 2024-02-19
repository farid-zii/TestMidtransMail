<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;


class DashboardController extends Controller
{
    public function index(){
        return view('admin.dashboard.index');
    }
}
