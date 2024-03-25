<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    function calculatorPage() {
        return view('Calculator.calculator');
    }

    function calculatorResult(Request $request) {
        $fnumber = $request->fnumber;
        $snumber = $request->snumber;
        $operator = $request->operator;
        if ($operator == '+') {
            $result = $fnumber + $snumber;
        } else if ($operator == '-') {
            $result = $fnumber - $snumber;
        } else if ($operator == '*') {
            $result = $fnumber * $snumber;
        } else {
            $result = $fnumber / $snumber;
        }
        return view('Calculator.calculator', get_defined_vars());
    }
}
