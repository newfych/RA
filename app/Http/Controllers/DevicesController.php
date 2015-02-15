<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DevicesController extends Controller {


	public function index()
	{
        return view('devices/index');
	}


	public function create()
	{
		return view('devices/create');
	}


	public function store()
	{
        return view('devices/store');
	}


	public function show($id)
	{
        return view('devices/show($id)');
	}


	public function edit($id)
	{
        return view('devices/edit($id)');
	}


	public function update($id)
	{
        return view('devices/update($id)');
	}


	public function destroy($id)
	{
        return view('devices/delete($id)');
	}

}
