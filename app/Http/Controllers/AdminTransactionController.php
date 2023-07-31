<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class AdminTransactionController extends Controller
{
    public function index()
    {
        // $transactions = Transaction::first()->get();
        $transactions = Transaction::first()->transaction();
        // dd($transactions);
        return view('admin/admin_transaction', [
            'title' => 'Transaction',
            'transactions' => $transactions,
        ]);
    }
}
