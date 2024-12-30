<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h5>PHP To JavaScript</h5>
    <input type="button" id="button" value="Show Something">

    <script>
        <?php
        $data = array(
            "first name" => "Rashidul",
            "email" => "rashidul@gmail.com",
            "age" => 25,
        );
        ?>
        const data = <?php echo json_encode($data); ?>;

        const btn = document.getElementById("button");
        btn.addEventListener("click", function() {
            console.log(data['first name']);
            console.log(data.email);
        })
    </script>
</body>

</html>