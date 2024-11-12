<?php
include_once "scramblerFunction.php";

$task = "encode";
if (isset($_GET["task"]) && $_GET["task"] !== "") {
    $task = $_GET["task"];
}


$key = "abcdefghijklmnopqrstuvwxyz1234567890";
if ("key" === $task) {
    $key_original = str_split($key);
    shuffle($key_original);
    $key = join("", $key_original);
    $click = true;
} else if (isset($_REQUEST['key']) && !empty($_REQUEST['key'])) {
    $key = $_REQUEST['key'];
}

$scrambleData = '';
if ("encode" === $task) {
    $data = $_POST["data"] ?? "";
    if (!empty($data)) {
        $scrambleData = scrambleData($data, $key);
    }
}
if ("decode" === $task) {
    $data = $_POST["data"] ?? "";
    if (!empty($data)) {
        $scrambleData = decodeData($data, $key);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <title>5.1 Project Data Scrambler</title>
</head>

<body>



    <section class="container">
        <div>
            <h1>Data Scrambler</h1>
            <p>Use This application to scramble your data</p>
            <p>
                <!-- <a href="/index.php?task=encode">Encode</a> | -->
                <a href="/index.php?task=encode">Encode</a> |
                <a href="/index.php?task=decode">Decode</a> |
                <a href="/index.php?task=key">Generate Key</a>
            </p>
        </div>
        <div class="form">
            <form method="POST" action="index.php<?php if ("decode" === $task) {
                                                        echo "?task=decode";
                                                    } ?>">
                <label for="key">Key</label>
                <input type="text" name="key" id="key" value="<?php echo displayName($key) ?>">
                <label for="data">Data</label>
                <textarea name="data" id="data" cols="30" rows="10"><?php if (isset($_POST["data"])) {
                                                                        echo $_POST["data"];
                                                                    } ?></textarea>
                <label for="result">Result</label>
                <textarea name="result" id="result" cols="30" rows="10"><?php echo $scrambleData; ?></textarea>
                <input type="submit" value="Do It For me">
            </form>
        </div>
    </section>

</body>

</html>