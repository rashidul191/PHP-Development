<?php
trait NumberSeriesOne
{
    function numberSeriesA()
    {
        echo "number Series A";
    }
    function numberSeriesB()
    {
        echo "number Series B";
    }
}
trait NumberSeriesTwo
{
    function numberSeriesC()
    {
        echo "number Series C";
    }
    function numberSeriesD()
    {
        echo "number Series D";
    }
}

class NumberSeries {
    use NumberSeriesOne;
    use NumberSeriesTwo;
}

$ns = new NumberSeries();

$ns -> numberSeriesC();

