<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function op1(Request $request){
        $operation=$request->input('operation');
        $num1=$request->input('num1');
        $num2=$request->input('num2');
        $calculer=$request->input('Calculer');
        $res=0;
        if($operation =="Addition"){
            $res=$num1+$num2;
        }
        else if($operation=="Soustraction"){
            $res=$num1-$num2;
        }
        else if($operation=="Multiplication"){
            $res=$num1*$num2;
        }
        else if($operation=="Division"){
            $res=$num1/$num2;
        }
         else{
            $res=0;
         }
        return view('Calcul',compact('res'));
    }
}
