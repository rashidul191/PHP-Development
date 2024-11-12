<?php
// Custom Exception

class MyException extends Exception {}

class NetworkException extends Exception {}

function exception()
{

    throw new NetworkException();
}


try {
    exception();
} catch (MyException $error) {
    echo "MyException Caught";
} catch (NetworkException $error) {
    echo "NetworkException Caught";
} catch (Exception $error) {
    echo "Exception Caught";
} finally {
    echo "\ndatabase connection loss";
}
