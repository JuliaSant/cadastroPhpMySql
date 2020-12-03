<?php
    $nome = filter_input(INPUT_POST,'nome');
    $tel = filter_input(INPUT_POST,'tel');
    $cpf = filter_input(INPUT_POST,'cpf');

    if(!empty($nome) || !empty($tel) || !empty($cpf)){
        $host = "localhost";
        $usuario = "root";
        $senha = "";
        $bd = "lp4";

        $conn = new mysqli($host, $usuario, $senha, $bd);

        if(mysqli_connect_error()){
            die('Connect Error ('. mysqli_connect_error() .')'
                .mysqli_connect_error()); 
        }else{
            $sql = "INSERT INTO pessoas (nome, telefone, id) 
                    values ('$nome', '$tel', '$cpf')";
                    if($conn->query($sql)){
                        echo "Nova gravação";
                    }else{
                        echo "foi nao hein";
                    }
            $conn->close();
        }
    }else{
        echo "Sem tarefa";
        die();
    }

   

    
?>