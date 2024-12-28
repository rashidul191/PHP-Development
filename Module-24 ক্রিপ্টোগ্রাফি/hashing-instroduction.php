<?php

// Hashing Algorithm

// print_r(hash_algos()); // show the hashing algorithm
// print_r(hash_hmac_algos()); // show the hashing algorithm
echo PHP_EOL;
echo md5("Lorem ipsum dolor sit, amet consectetur adipisicing elit. At, temporibus?");
echo PHP_EOL;
echo sha1("Lorem ipsum dolor sit, amet consectetur adipisicing elit. At, temporibus?");
echo PHP_EOL;
echo hash('sha512', "Lorem ipsum dolor sit, amet consectetur adipisicing elit. At, temporibus?");
echo PHP_EOL;
echo bin2hex(mhash(MHASH_SHA1, "Lorem ipsum dolor sit, amet consectetur adipisicing elit. At, temporibus?"));
echo PHP_EOL;
