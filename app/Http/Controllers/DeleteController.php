<?php namespace App\Http\Controllers;

use App\Device;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DeleteController extends Controller {

	public function device($id)
    {   $device = null;
        $device = Device::find($id);
        if ($device == null) {
            echo '5';
            return redirect('devices');
        }
        elseif ($device != null){
                return view('delete/device', compact('device'));
        }
    }

}
