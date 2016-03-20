<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Orders;
use App\Products;
use DateTime;
class DashboardController extends Controller
{
    public function getDashboard() {
    	$gopy = 0;

    	//$product = Products::whereDay('created_at', '=', date('d'))->whereMonth('created_at', '=', date('m'))->whereYear('created_at', '=', date('Y'))->get()->take(5)->toArray();
    	$product = Products::whereMonth('created_at', '=', date('m'))->whereYear('created_at', '=', date('Y'))->get()->take(5)->toArray();

    	//$order = Orders::whereDay('created_at', '=', date('d'))->whereMonth('created_at', '=', date('m'))->whereYear('created_at', '=', date('Y'))->get()->take(5)->toArray();
    	$order = Orders::whereMonth('created_at', '=', date('m'))->whereYear('created_at', '=', date('Y'))->get()->take(5)->toArray();
		return view('admin.dashboard', compact('gopy', 'order', 'product'));
	}
}
