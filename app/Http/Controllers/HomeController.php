<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get current month [1, 12]
        $now = new \DateTime('now');
        $month = $now->format('n');

        // Get current user
        $user = Auth::user();
        // Check if there are income rows for a user this month
        $income = DB::table('incomes')->where('user_id', $user->id)->where('month', $month)->exists();
        // If there are incomes return those else return false
        if($income){
            $income = DB::table('incomes')->where('user_id', $user->id)->where('month', $month)->get();
        }
        // Check if there are expenses per user this month
        $expense = DB::table('expenses')->where('user_id', $user->id)->where('month', $month)->exists();
        // If there are expenses return those else return false
        if($expense){
            $expense = DB::table('expenses')->where('user_id', $user->id)->where('month', $month)->get();
        }

        $totalPlus = DB::table('incomes')->where('user_id', $user->id)->where('month', $month)->sum('amount');
        $totalMin = DB::table('expenses')->where('user_id', $user->id)->where('month', $month)->sum('amount');

        $total = $totalPlus - $totalMin;

        return View::make('home')->with('incomes', $income)->with('expenses', $expense)->with('total' , $total);
    }
}
