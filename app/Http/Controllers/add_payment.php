<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Requests\AddPayment;
use Illuminate\Support\Facades\DB;

class add_payment extends Controller
{
    public function Add(AddPayment $req) {
        $pay_amount = htmlspecialchars(trim($req->pay_amount));
        $pay_coworker = trim($req->pay_coworker);
        $fee = $pay_amount * 0.13;
        $oldman_fee = $pay_amount * 0.01;
        $total = $pay_amount - $fee - $oldman_fee;

        DB::table('payments')->insert(['coworker_id' => $pay_coworker, 'amount' => $pay_amount, 'fee' => $fee, 'old_fee' => $oldman_fee, 'total' => $total]);
        return redirect('/payments');
    }

    public function Output() {
        $payments = DB::table('payments')->select('*')->get();
        return view('payments', compact('payments'));
    }
}
