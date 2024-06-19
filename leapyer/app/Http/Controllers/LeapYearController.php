<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeapYearController extends Controller
{
    public function index()
    {
        return view('leapyear');
    }

    public function calculateLeapYears(Request $request)
    {
        $request->validate([
            'start_year' => 'required|integer',
            'end_year' => 'required|integer|gte:start_year',
        ]);

        $startYear = $request->input('start_year');
        $endYear = $request->input('end_year');
        $leapYears = [];

        for ($year = $startYear; $year <= $endYear; $year++) {
            if ($this->isLeapYear($year)) {
                $leapYears[] = $year;
            }
        }

        return view('leapyear', ['leapYears' => $leapYears, 'startYear' => $startYear, 'endYear' => $endYear]);
    }

    private function isLeapYear($year)
    {
        return ($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0);
    }
}
