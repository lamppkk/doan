<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Contacts;

class ContactController extends Controller
{
    public function index()
    {
    	$data = Contacts::all();
    	return view('admin.contact', compact('data'));
    }

    public function destroy($id)
    {
    	$contact = Contacts::findOrFail($id);
    	$contact->delete();
    }
}
