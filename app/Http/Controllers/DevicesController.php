<?php namespace App\Http\Controllers;

use App\Device;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Schema;
use Request;

class DevicesController extends Controller {


	public function index()
	{
        $devices = Device::latest()->get();
        return view ('devices/index', compact('devices'));
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
        $name = $input['name'];
        $device = Device::create($input);
        $id = $device['id'];
        Artisan::call('make:migration', ['--create'=>$name,'name'=>$name]);
        Artisan::call('migrate');
        Schema::table($name, function($table){

            $table->integer('type_id');
            $table->integer('component_id');
            $table->dropTimestamps();
        });

        Artisan::call('migrate');
        return new RedirectResponse(url('/devices'));
	}


	public function show($id)
	{
        $device = Device::findOrFail($id);
        return view ('devices/show', compact('device'));
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
        $device = Device::findOrFail($id);
        $name = $device['name'];
        Device::destroy($id);
        Schema::dropIfExists($name);

        return new RedirectResponse(url('/devices'));
	}

}
