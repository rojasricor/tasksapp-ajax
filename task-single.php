<?php

    include("database.php");
    $id = $_POST["id"];
    $query = "SELECT * FROM tasks WHERE id = $id";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("Query failed: ". mysqli_error($connection));
    }

    $json = array();
    while ($row = mysqli_fetch_array($result)) {
        $json[] = array(
            "name" => $row["name"],
            "description" => $row["description"],
            "id" => $row["id"],
        );
    }

    $jsonstring = json_encode($json[0]);
    echo $jsonstring;

?>