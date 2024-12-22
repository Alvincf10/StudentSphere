<?php

namespace App\Http\Controllers\Admin\Transaction;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(Transaction $transaction){
        $transaction = Transaction::all();
        return view('layouts.admin.transaction.index',compact('transaction'));
    }
}
