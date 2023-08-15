<?php

namespace App\GraphQL\Queries;

use League\Csv\Reader;

final class Laptops
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */

    public function __invoke($_, array $args)
    {
        $csvPath = base_path('database/laptops.csv');
        $csv = Reader::createFromPath($csvPath, 'r');
        $csv->setHeaderOffset(0);


        $laptops = [];

        foreach ($csv->getRecords() as $record) {
            $laptops[] = [
                'name' => $record['name'],
                'processor' => $this->_processorPower($record['processor']),
                'img_link' => $record['img_link'],
                'ram' =>  (int)intval(explode(" ", $record['ram'])[0]),
                'storage_size' => (int) $this->_convertTBtoGB($record['storage']),
                'display' => (float) $record['display(in inch)'],
                'rating' => (float) floatval($record['rating']),
            ];
        }

        return $laptops;
    }



    private function _processorPower($prosessor)
    {
        $highProsessorPower = " | high power prosssor ";
        $averageProsessorPower = " | average power prosssor";
        $lowProsessorPower = " | low power prosssor";

        switch ($prosessor) {
            case str_contains($prosessor, "3"):
                return $prosessor .= $lowProsessorPower;
            case str_contains($prosessor, "5"):
                return $prosessor .= $averageProsessorPower;
            case str_contains($prosessor, "7"):
            case str_contains($prosessor, "M1"):
            case str_contains($prosessor, "M2"):
            case str_contains($prosessor, "9"):
                return $prosessor .= $highProsessorPower;
            default:
                return $prosessor .= $lowProsessorPower;
        }
    }

    private function _convertTBtoGB($storage)
    {
       
        if (str_contains($storage, 'TB')) {
            $x = intval($storage[0]  * 1000);
            return $x;
        } else {
            return  intval(substr($storage, 0));
        }
    }
}
