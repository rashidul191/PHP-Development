<?php

class MyFund
{

    private $fund;

    public function __construct($initialFund = 0)
    {

        $this->fund = $initialFund;

        // echo $this->fund;
    }

    public function addFund($money)
    {
        // $this->fund = $this->fund + $money;
        $this->fund += $money;
    }

    public function withdrawFund($money)
    {
        // $this-> fund = $this-> fund - $money;
        $this->fund -= $money;
    }

    public function totalFund()
    {
        echo "My Total Fund is : {$this->fund}";
        echo PHP_EOL;
    }
}

$data = new MyFund(100);
// $data -> fund = 70;
$data->totalFund();
$data->addFund(10);
$data->totalFund();
$data->withdrawFund(7);
$data->totalFund();
