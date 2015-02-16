<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\SensorType;
use Illuminate\Http\Request;

class SensorTypeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $sensorTypes = SensorType::all();
        return view ('sensorTypes/index', compact('sensorTypes'));
	}

	public function show($id)
	{
		//
	}

}
