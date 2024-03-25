<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class CalculatorController extends Controller
{
    function calculatorPage() {
        return view('Calculator.calculator');
    }

    function calculatorResult(Request $request) {
        $fnumber = $request->fnumber;
        $snumber = $request->snumber;
        $operator = $request->operator;

        try {
            if ($operator == '+') {
                $result = $fnumber + $snumber;
            } else if ($operator == '-') {
                $result = $fnumber - $snumber;
            } else if ($operator == '*') {
                $result = $fnumber * $snumber;
            } else {
                $result = $fnumber / $snumber;
            }
        } catch (\Throwable $th) {
            $result = null;
            $error = $th->getMessage();
        }


        return view('Calculator.calculator', get_defined_vars());
    }
}
