<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Members;

class MemberController extends Controller
{
	public function index()
    {
        $data = Members::all();
    	return view('admin.member.list', compact('data'));
    }

    public function create()
    {
    	# code...
    }

    public function store()
    {
    	# code...
    }

    public function edit()
    {
    	# code...
    }

    public function update()
    {
    	# code...
    }

    public function destroy()
    {
    	# code...
    }
    
}
