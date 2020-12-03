<?php
    $projeto = filter_input(INPUT_POST,'projeto');
    $id = filter_input(INPUT_POST,'id');
    $descricao = filter_input(INPUT_POST,'descricao');
    $orcamento = filter_input(INPUT_POST,'orcamento');
    $cpf = filter_input(INPUT_POST,'cpf');

    if(!empty($projeto) || !empty($descricao) || !empty($orcamento) || !empty($cpf)){
        $host = "localhost";
        $usuario = "root";
        $senha = "";
        $bd = "lp4";

        $conn = new mysqli($host, $usuario, $senha, $bd);

        if(mysqli_connect_error()){
            die('Connect Error ('. mysqli_connect_error() .')'
                .mysqli_connect_error()); 
        }else{
            $sql = "INSERT INTO projetos (id, projeto, descricao, orcamento, nome_pessoa) 
                    values ('$id','$projeto', '$descricao', '$orcamento', '$cpf')";
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