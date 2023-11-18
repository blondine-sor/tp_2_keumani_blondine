<?php
/* --to do 
 -- create address
 */
function createAdresse($data)
{

    /* global $conn;
    $query = "INSERT INTO user VALUES (NULL, ?, ?, ?,?)";

    if ($stmt = mysqli_prepare($conn, $query)) {

        mysqli_stmt_bind_param(
            $stmt,
            "sss",
            $data['user_name'],
            $data['email'],
            $data['pwd']
        );

        /* Exécution de la requête */
    // $result = mysqli_stmt_execute($stmt); 



}
