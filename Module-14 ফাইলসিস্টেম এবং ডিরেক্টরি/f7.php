<?php

// pathinfo() function

const FILENAME = "/Application/card/assets/js/script.js";

// echo pathinfo(FILENAME, PATHINFO_BASENAME);
// echo pathinfo(FILENAME, PATHINFO_FILENAME);
// echo pathinfo(FILENAME, PATHINFO_EXTENSION);
// echo pathinfo(FILENAME, PATHINFO_DIRNAME);
// echo pathinfo(pathinfo(FILENAME, PATHINFO_DIRNAME), PATHINFO_BASENAME);
print_r(pathinfo(FILENAME, PATHINFO_ALL));
