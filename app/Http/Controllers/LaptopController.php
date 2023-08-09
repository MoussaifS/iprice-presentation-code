<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaptopController extends Controller
{

    public function index()
    {
        return view('laptop.index');
    }

    public function recommended_laptop(Request $request)
    {
        dd($request -> ram); 
        return view('laptop.show ');
    }


    // avg wighted as 4
    // low wighted as 1.5 
    // high equal 7 

    

    private function _computeProcessorPower($requirement)
    {
        $totalProcessorValue = 0;
        $processorWeightedNumbers = $this->_convertProcessorValuesToWeightedNumbers($requirement);

        foreach ($processorWeightedNumbers as  $number) {
            $totalProcessorValue += $number;
        }

        return $totalProcessorValue;
    }

    private function _convertProcessorValuesToWeightedNumbers($values)
    {
        $mapping = [
            'avg' => 4,
            'low' => 1.5
        ];

        return array_map(function ($value) use ($mapping) {
            return $mapping[$value];
        }, $values);
    }




    private function _get_laptop_specs_from_user($specs)
    {
    }
}
