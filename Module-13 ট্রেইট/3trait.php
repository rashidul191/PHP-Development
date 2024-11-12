<?php

// trait method with alias

trait NumberSeriesOne
{
    function numberSeriesA()
    {
        echo "Number Series A";
    }
}

trait NumberSeriesTwo
{
    function numberSeriesA()
    {
        echo "Number Series A++";
    }
}

class NumberSeries
{
    use NumberSeriesOne, NumberSeriesTwo {
        NumberSeriesOne::numberSeriesA as numberSeriesAA;
        NumberSeriesTwo::numberSeriesA as numberSeriesAAA;
    }

    function numberSeriesA()
    {
        echo "print number series";
    }
}

$data = new NumberSeries();

$data -> numberSeriesAAA();
