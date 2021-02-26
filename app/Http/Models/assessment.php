<?php
namespace App\Http\Models;

class assessment
{
    //properties for the model
    private $input1;
    private $input2;
    private $input3;
    private $input4;
    
    
    
    //constructor to initialize the properties
    public function __construct($input1,$input2,$input3,$input4)
    {
        $this->input1=$input1;
        $this->input2=$input2;
        $this->input3=$input3;
        $this->input4=$input4;
    }
    

    
    
    //getters and setter for the properties
    /**
     * @return mixed
     */
    public function getInput1()
    {
        return $this->input1;
    }

    /**
     * @return mixed
     */
    public function getInput2()
    {
        return $this->input2;
    }

    /**
     * @return mixed
     */
    public function getInput3()
    {
        return $this->input3;
    }

    /**
     * @return mixed
     */
    public function getInput4()
    {
        return $this->input4;
    }

    /**
     * @param mixed $input1
     */
    public function setInput1($input1)
    {
        $this->input1 = $input1;
    }

    /**
     * @param mixed $input2
     */
    public function setInput2($input2)
    {
        $this->input2 = $input2;
    }

    /**
     * @param mixed $input3
     */
    public function setInput3($input3)
    {
        $this->input3 = $input3;
    }

    /**
     * @param mixed $input4
     */
    public function setInput4($input4)
    {
        $this->input4 = $input4;
    }

  
    
    
    
    
}