<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Requests\AddCoworker;
use Illuminate\Support\Facades\DB;

class add_coworker extends Controller
{
    public function Add(AddCoworker $req) {
        $name = $req->name;
        $role = $req->role;

        DB::table('coworkers')->insert(['name' => $name, 'role' => $role]);
        return redirect('/coworker');
    }

    public function Output() {
        $coworker = DB::table('coworkers')->select('*')->get();
        return view('coworkers ', compact('coworker'));
    }
}
