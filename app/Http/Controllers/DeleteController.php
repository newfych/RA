<?php namespace App\Http\Controllers;

use App\Device;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DeleteController extends Controller {

	public function device($id){

        $device = Device::findOrFail($id);
        return view ('delete/device', compact('device'));

    }

}
