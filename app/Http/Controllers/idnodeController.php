<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB ;


class idnodeController extends Controller
{
	public function Air()
	{
		$waterlevel = DB::table('id_node')->paginate(20);
		 	return view('waterlevel',['waterlevel' => $waterlevel]);
	}

	public function Suhu()
	{
		$temperature = DB::table('id_node')->paginate(20);
		 	return view('temperature',['temperature' => $temperature]);
	}

	public function Kelembaban()
	{
		$humidity = DB::table('id_node')->paginate(20);
		 	return view('humidity',['humidity' => $humidity]);
	}

	public function n1()
	{
		$Node1 = DB::table('id_node')->paginate(30);
		 	return view('Node1',['Node1' => $Node1]);
	}

	public function n2()
	{
		$Node2 = DB::table('id_node')->paginate(30);
		 	return view('Node2',['Node2' => $Node2]);
	}

	public function n3()
	{
		$Node3 = DB::table('id_node')->paginate(30);
		 	return view('Node3',['Node3' => $Node3]);
	}

	public function n4()
	{
		$Node4 = DB::table('id_node')->paginate(30);
		 	return view('Node4',['Node4' => $Node4]);
	}
}