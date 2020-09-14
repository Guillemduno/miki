<?php

    include('connection.php');

    $sql_literals = 'SELECT codi, valor FROM literals';
    $mysqli->set_charset("utf8");
    $result_literals = $mysqli->query($sql_literals);
    

    if ($result_literals->num_rows > 0) {
        // output data of each row
        while($row_literals = $result_literals->fetch_assoc()) {
            $codi           = $row_literals['codi'];
            $valor          = $row_literals['valor'];
            $literal[$codi] = $valor;
        }  
    }
    $mysqli->close();
?>