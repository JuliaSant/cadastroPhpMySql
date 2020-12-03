<?php
    $tarefa = filter_input(INPUT_POST,'tarefa');
    $prioridade = filter_input(INPUT_POST,'prioridade');
    $dat = filter_input(INPUT_POST,'dat');

    if(!empty($tarefa) || !empty($prioridade) || !empty($dat)){
        $host = "localhost";
        $usuario = "root";
        $senha = "";
        $bd = "lp4";

        $conn = new mysqli($host, $usuario, $senha, $bd);

        if(mysqli_connect_error()){
            die('Connect Error ('. mysqli_connect_error() .')'
                .mysqli_connect_error()); 
        }else{
            $sql = "INSERT INTO tarefas (tarefa, prioridade, data) 
                    values ('$tarefa', '$prioridade', '$dat')";
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