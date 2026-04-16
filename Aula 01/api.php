<?php 

    //CABEÇALHO
    header("Content-Type: application/json"); //Define o tipo de resposta

    $metodo = $_SERVER['REQUEST_METHOD'];

    $arquivo = 'usuarios.json';

    if (!file_exists($arquivo)) {
        file_put_contents($arquivo, json_encode([], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }

    $usuarios = json_decode(file_get_contents($arquivo), true);

    //$usuarios = [
        //["id" => 1, "nome" => "Maria Souza", "email" => "maria@gmail.com"],
        //["id" => 2, "nome" => "João Silva", "email" => "joao@gmail.com"]
    //];


    //echo "Método da Requisição: " . $metodo;

    switch ($metodo) {
        case 'GET':
            echo json_encode($usuarios);
            //echo "AQUI AÇÕES DO MÉTODO GET";
            break;
        case 'POST':
            //echo "AQUI AÇÕES DO MÉTODO POST";
            $dados = json_decode(file_get_contents('php://input'), true);
            //print_r($dados);
            $novoUsuario = [
                "id" => $dados["id"],
                "nome" => $dados["nome"],
                "email" => $dados["email"]
            ];

            //Adiciona o novo usuário ao array existente
            array_push($usuarios, $novoUsuario);
            echo json_encode('Usuário inserido com sucesso!');
            print_r($usuarios);

            break;
        default :
            echo "MÉTODO NÃO ENCONTRADO!";
            break;
    }

    //CONTEÚDO
 
    //Converte para json e retorna



?>