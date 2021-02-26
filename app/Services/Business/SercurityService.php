<?php

namespace App\Services\Business;

use App\Http\Models\assessment;

class SercurityService
{
    private $assess;
    
    
    //function to  check if the input is CST-256
    public function assess($input1, $input2, $input3, $input4)
    {
         
        //instantiate the data access layer
        $this->assess = new assessment($input1, $input2, $input3, $input4);
        
        if($this->assess->getInput1() == "CST-256" ||$this->assess->getInput2() == "CST-256"||$this->assess->getInput3() == "CST-256"||$this->assess->getInput4() == "CST-256")
        {
            return true;
        }
        else 
            return false;
    }
}