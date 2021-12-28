<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB ;


class idnodeController extends Controller
{
	public function index()
	{
		$data = "";
		$data = id_node::paginate(10);
		 		return view('waterlevel',['data' => $data]);

	}

}