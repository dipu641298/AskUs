<?php
    $connection = mysqli_connect('localhost', 'root','','my_db');
    $sqlQuery = "SELECT * from signuptable WHERE status = 1";
    $result = mysqli_query($connection, $sqlQuery);
    $row = mysqli_fetch_assoc($result);
    $username12 = $row['username'];
    $name = $row['firstname']." ".$row['lastname'];
    $institute = $row["institute"];
    $following = $row["following"];
    $follower = $row["followers"];
    $questions = $row["questions"];
    $answers = $row["answers"];
    $image = $row['image'];
?>