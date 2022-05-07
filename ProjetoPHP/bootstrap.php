<?php

use Aluno\ProjetoPhp\Controller\ExercicioController;

require_once __DIR__."/vendor/autoload.php";

    /*Recuperar o que o usuário digitou;
    E qual método HTTP ele utilizou;*/
    $method = $_SERVER['REQUEST_METHOD'];
    $path = $_SERVER['PATH_INFO'];

    /*Instanciar classe Router;
    Recebe método e path que o usuário informou;*/
    $router = new \Aluno\ProjetoPhp\Router($method, $path);

    //Adicionar rotas válidas:
    $router->get('/ola-mundo', function(){
       return "Olá Mundo!"; 
    });

    //$router->get('/exemplo',ExercicioController::exibir());
    $router->get('/exemplo',
    'Aluno\ProjetoPhp\Controller\ExercicioController::exibir');

    $router->post('/exemplo-resultado',
    'Aluno\ProjetoPhp\Controller\ExercicioController::exibirResultado');
    //Fim Rotas Válidas;

    //Checa as entradas do usuário;
    $result = $router->handler();

    if (!$result){
        http_response_code(404);
        echo "Página não encontrada";
        die();
    }   //Resposta caso erro;

    echo $result($router->getParams());
?>