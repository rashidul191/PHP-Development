<?php
echo "Welcome To The Beautiful World of CURL & PHP \n";

if (isset($_POST['secret']) && 'noodles' == $_POST['secret']) {
    echo "Please have some noodles";
}
