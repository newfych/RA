<?php namespace App\Http\Controllers;

use App\Device;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Request;

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
        $input = Request::all();
        $img = $input['imageName'];
        if ($img == ''){
            $input['imageName'] = 'Default.png';
        }

        Device::create($input);
//
        return new RedirectResponse(url('/devices'));
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
