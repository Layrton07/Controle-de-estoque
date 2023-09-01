<?php 
    require('./config/config.php');
    $result = $conn -> query("SELECT * FROM est_funcionario");
    while($rows = $result -> fetch(PDO::FETCH_ASSOC)){
        var_dump ($rows);
    }
?>