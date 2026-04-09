<?php 

    //CABEÇALHO
    header("Content-Type: application/json"); //Define o tipo de resposta

    $metodo = $_SERVER['REQUEST_METHOD'];

    //echo "Método da Requisição: " . $metodo;

    switch ($metodo) {
        case 'GET':
            echo "AQUI AÇÕES DO MÉTODO GET";
            break;
        case 'POST':
            echo "AQUI AÇÕES DO MÉTODO POST";
            break;
        default :
            echo "MÉTODO NÃO ENCONTRADO!";
            break;
    }

    //CONTEÚDO
    //$usuarios = [
       //["id" => 1, "nome" => "Maria Souza", "email" => "maria@gmail.com"],
       //["id" => 2, "nome" => "João Silva", "email" => "joao@gmail.com"]
    //];

    //Converte para json e retorna
   // echo json_encode($usuarios);



?>