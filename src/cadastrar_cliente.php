<?php
    // chamei a conexao 
    require_once 'conexao.php'; 

    // limpa tudo que nao for numero 
    function limpar_texto($str) {
        return preg_replace("/[^0-9]/", "", $str);
    }

    $erro = false;

    if(count($_POST) > 0) {

        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];

        if(!empty($telefone)) { //si exitir numero 
            $telefone = limpar_texto($telefone); //limpa esse numero 
            if(strlen($telefone) != 11) // si for diferente de 11 
                $erro = "O telefone tem que ser preenchido no padrão (19) 98888-8888"; // envi esta mensagem 
        }
        //dentro d banco de dados, tabela pessoa
        $sql_code = "INSERT INTO pessoas(nome, sobrenome, telefone, email, data) 
        VALUES ('$nome', '$sobrenome', '$telefone', '$email', NOW())";
        $certo = $mysqli->query($sql_code) or die($mysqli->error);

       if ($certo) {
            echo "<div class='alert alert-success text-center' id='msg-sucesso'>
                    Pessoa cadastrada com sucesso!
                </div>";
            unset($_POST);
        }

    }