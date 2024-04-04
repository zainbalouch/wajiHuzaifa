<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class CalculatorController extends Controller
{
    public function calculator(){
        return view('calculator');
    }
    public function calculatorResult(request $request){
        $fname=$request->fname;
        $sname=$request->sname;
        $operator=$request->operator;
       
      

        try {

            if($operator=='+'){
                $result=$fname+$sname;
            }else if($operator=='-'){
                $result=$fname-$sname;
            }else if($operator=='*'){
                $result=$fname*$sname;
            }else{
                $result=$fname/$sname;
            }
            
        } catch (\Throwable $th) {
            $error=$th->getMessage();
        }

        return view('calculator',get_defined_vars());
    }
}
