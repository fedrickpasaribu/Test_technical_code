<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class SegitigaController extends BaseController
{
    public function index(){
        return view('triangle.index');
    }

    public function hitung(Request $request){
        $input = $request->input('base');
        $length = strlen($input);

        $triangle = '';

        for($i =0; $i < $length; $i++){
            // $triangle .= substr($input,0,$i + 1) . "<br>";
            $a = '';
            $len = intval($input[$i]);
            for($j=0;$j<=$i;$j++){
                if($j < $i ){
                    if($j==0){
                        $a .= $len;
                    }else{
                        $a .='0';
                    }
                }else{
                    $a .= '0';
                }
            }
            $triangle .= $a. "<br>";
        }
        // $triangle = $this->segitiga($input);
        return response()->json(['triangle' => $triangle]);
    }


    private function segitiga($input){
        $triangle = [];
        
        for($i = 0; $i < strlen($input); $i++){
            $row = '';
            for($j = 0; $j <= $i ; $j++){
                $row .= $j. " ";
            }
            $triangle[] = $row;
        }
        return $triangle;
    }

    public function hitungGanjil(Request $request){
        $limit = $request->input('base');
        $limitIn = intval($limit);
        $dataGanjil = '';

        for($i = 0; $i <= $limitIn; $i++){
            if($i % 2 !== 0){
                $dataGanjil .= $i . '<br>';
            }
        }
        return response()->json(['dataGanjil'=>$dataGanjil]);
    }

    public function hitungGenap(Request $request){
        $limit = $request->input('base');
        $limitIn = intval($limit);
        $dataGenap = '';

        for($i = 0; $i <= $limitIn; $i++){
            if($i % 2 === 0){
                $dataGenap .= $i . '<br>';
            }
        }
        return response()->json(['dataGenap'=>$dataGenap]);
    }
}
