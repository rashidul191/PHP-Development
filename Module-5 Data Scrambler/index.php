<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <title>5.1 Project Data Scrambler</title>
</head>

<body>
    <section class="container">
        <div>
            <h1>Data Scrambler</h1>
            <p>Use This application to scramble your data</p>
            <p>
                <a href="/?task=encode">Encode</a> |
                <a href="/?task=decode">Decode</a> |
                <a href="/?task=generate">Generate Key</a>
            </p>
        </div>
        <div class="form">
            <label for="key">Key</label>
            <input type="text" name="key" id="key">
            <label for="data">Data</label>
            <textarea name="data" id="data" cols="30" rows="10"></textarea>
            <label for="result">Result</label>
            <textarea name="result" id="result" cols="30" rows="10"></textarea>
            <input type="submit" value="Do It For me">
        </div>
    </section>

</body>

</html>