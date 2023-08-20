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
        $laptop = GraphQL::query('
    {
        laptops {
            name
            processor
        }
    }
');


        return view('laptop.show ');
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

    private function _computeProcessorPower($requirement)
    {
        return array_sum($this->_convertProcessorValuesToWeightedNumbers($requirement));
    }


    private function _getRamSpace($requirement)
    {
        switch ($requirement) {
            case 'low':
            case 'avg':
                return 8;
            case 'high':
                return 16;
            default:
                return 8;
        }
    }

    private function _getScreenSize($requirement)
    {
        switch ($requirement) {
            case 'small':
                return 14;
            case 'medium':
                return 16;
            case 'large':
                return 18;
        }
    }



    private function _get_laptop_specs_from_user($specs)
    {
    }
}
