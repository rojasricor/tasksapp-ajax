<?php

    $connection = mysqli_connect(
        "localhost",
        "admin",
        "admin",
        "tasksapp"
    );

    if (!$connection) {
        echo "Has failed to connect to the database";
    }

?>