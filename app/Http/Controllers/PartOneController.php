<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPUnit\Framework\countOf;

class PartOneController extends Controller
{
    //
    public function countNum(Request $request){
        $start_num= $request['start_num'];
        $end_num=$request['end_num'];
        $count=array();
        if($start_num < $end_num){
        $result=range($start_num, $end_num) ;
        
        foreach ($result as $number){
            if(preg_match('/5/', $number)){
                continue;
            }
        
        $count[]=$number;
            
        // count($count);  
        }  
        return response()->json(array('status' => true ,'Result Is'=>count($count), 'statuscode'=> 200 ));        
     } 
     else {
        return response()->json(array('status' => false, 'message' => "Must Start number Smaller than End Number ", 'statuscode' => 400), 400);

     }

    }

    public function alphabetic(Request $request){
        $input_string= $request['input_string'];
        $count=array();
        // $result=range('A','ZZZ');
        for($x = 'A'; $x <= 'ZZ'; $x++){
            $count[]=$x;
        } 
        array_unshift($count,"");
        if(in_array($input_string,$count)){
            return response()->json(array('status' => true ,'alphabet Num'=>(int)implode(array_keys($count, $input_string)), 'statuscode'=> 200 ));
     
        }  


    }

    
    function minJumps()
    {
        $arr = array(1,4,8);
        $num=count($arr);
        $jumps = array($num);
        
       $jumps[0] = 0;
       for ($i = 1; $i < $num; $i++)
       {
           $jumps[$i] = max($arr);
           for ($j = 0; $j < $i; $j++)
           {
               if ($i <= $j + $arr[$j] && 
                   $jumps[$j] != max($arr))
               {
                   $jumps[$i] = min($jumps[$i], 
                                $jumps[$j] + 1);
                   break;
               }
           }
       }
       return $jumps[$num-1];
    
    }
}
