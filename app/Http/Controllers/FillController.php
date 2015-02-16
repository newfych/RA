<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\SensorType;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;

class FillController extends Controller {


	public function sensors()
	{
		$sensors = SensorType::all();
        dd($sensors);
	}

    public function stypes()
    {
        $sensorTypes = ['Temperature',
                        'Humidity',
                        'Optical',
                        'IR',
                        'Input',
                        'Audio',
                        'Mechanical',
                        'Position',
                        'Magnetic',
                        'Gas',
                        'Other'];
        foreach ($sensorTypes as $sensorType){
//
            Artisan::call('make:model', ['name'=>$sensorType]);

            $controllerName = ($sensorType.'Controller');
            Artisan::call('make:controller', ['name'=>$controllerName]);

            Schema::dropIfExists($sensorType);
            $tableName=(strtolower($sensorType).'s');
            Schema::create($tableName, function($table){
                $table->increments('id');
                $table->string('name', 50);
                $table->float('min_value');
                $table->float('max_value');
                $table->string('output_type');
            });

        }
        $sensors = SensorType::all();
        dd($sensors);
    }


}
