<?php 
    require('./config/config.php');

    $json_data = file_get_contents('php://input');
    
    $data = json_decode($json_data, true);
    
    $name = $data['name'];
    $email = $data['email'];
    $password = $data['password'];

    $result = $conn -> query("SELECT * FROM est_funcionario");
    while($rows = $result -> fetch(PDO::FETCH_ASSOC)){
        if($rows['name']==$name || $rows['email']==$email){
            exit();
        }
    }
    $sql = "INSERT INTO est_funcionario ( nome, email, senha ) VALUES ( :nome, :email, :senha)";
    $stmt = $conn -> prepare($sql);
    $stmt->bindParam(':nome',$name);
    $stmt->bindParam(':email',$email);
    $stmt->bindParam(':senha',$password);
    if ($stmt->execute()) {
        $response = array("nome" => $name, "email" => $email, "senha" => $password);
        echo json_encode($response);
    } else {
        $response = array("message" => "Erro ao inserir os dados");
        echo json_encode($response);
    }

    $conn = null;
?>