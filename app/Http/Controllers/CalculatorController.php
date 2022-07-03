<?php

namespace App\Http\Controllers;

use App\Models\ClassRoutine;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;

class CalculatorController extends Controller
{

    public function calculate(Request $request) {
        $result = '';
        switch($request->symbol)
        {
            case '+':
                $result = $request->first + $request->second;
                break;

            case '-':
                $result = $request->first - $request->second;
                break;

            case '*':
                $result = $request->first * $request->second;
                break;

            case '/':
                $result = $request->first / $request->second;
                break;

            default:
                $result = "Sorry No command found";
        }
        return json_encode([
            'first_number'=>$request->first,
            'second_number'=>$request->second,
            'answer'=>$result,
        ]);
    }
}
