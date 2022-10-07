<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Http\Requests\AddReport;
use App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class add_report extends Controller
{
    public function Add(AddReport $req) {
        $report_type = $req->report_type;
        $report_date = $req->report_date;

        $db_date = DB::table('payments')->select('*')->get();

        return redirect("/report");
    }

    public function GenerateReport() {
        $report = DB::table('payments')->select('*')->where('created_at', ">", strtotime(date('Y-m-d'). "- 30 days"))->get();
        return view('report ', compact('report'));
    }
}
