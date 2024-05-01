<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CafeController extends Controller
{
    public function showInfo()
    {
        $cafeHours = [
            'Monday' => 'Closed',
            'Tuesday' => '8am - 22pm',
            'Wednesday' => '8am - 22pm',
            'Thursday' => '8am - 22pm',
            'Friday' => '8am - 22pm',
            'Saturday' => '8am - 22pm',
            'Sunsay' => '8am - 22pm',
        ];

        $cafeLocation = 'Sherlock Holmes Street, London, UK';

        return view('cafe-info', compact('cafeHours', 'cafeLocation'));

    }

    public function showContact()
    {
        $cafeEmail = 'info@cafes.com';

        return view('cafe-contact', compact('cafeEmail'));
    }

}
