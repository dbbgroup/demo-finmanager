<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Requests\AddCompany;
use Illuminate\Support\Facades\DB;

class add_company extends Controller
{
    public function Add(AddCompany $req) {
        $company_name = $req->company_name;
        $company_activity = $req->company_activity;
        $company_description = $req->company_description;

        DB::table('companies')->insert(['name' => $company_name, 'description' => $company_description, 'balance' => 0, 'shortname' => $company_activity]);
        return redirect('/company');
    }

    public function Output() {
        $company = DB::table('companies')->select('*')->get();
        return view('companies', compact('company'));
    }
}
