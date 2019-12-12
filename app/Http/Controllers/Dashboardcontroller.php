<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\SiswaModel;
class Dashboardcontroller extends Controller
{
    public function index()
    {
        return view('dashboards.cimet');
    }
}
