<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\assessment;
use App\Services\Business\SercurityService;

class AssessmentController extends Controller
{
    public function index(Request $request)
    {
        $input1 =  $request->input('inputa');
        $input2 =  $request->input('inputb');
        $input3 =  $request->input('inputc');
        $input4 =  $request->input('inputd');
        
        
        $assess = new SercurityService();
        $result = $assess->assess($input1, $input2, $input3, $input4);
        
        if ($result){
            return view('assessment')->with('msg','One of the inputs is CST-256');
        } else {
            return view('assessment')->with('msg','No input is CST-256');
        }
        
        
    }
}