<p>
    <a href="/index.php?task=report">All Students</a> |
    <a href="/index.php?task=add">Add Student</a> |
    <a href="/index.php?task=seed">Seed</a> |

    <?php

    $logined = $_SESSION['logined'] ?? false;

    if (!$_SESSION['user']) {
    ?>
        <a href="/auth.php">Log In</a>
    <?php
    } else {
    ?>
        <a href="index.php?logout=true">Log Out (<?php echo $_SESSION['user']; ?>)</a>
    <?php
    }
    ?>


</p>