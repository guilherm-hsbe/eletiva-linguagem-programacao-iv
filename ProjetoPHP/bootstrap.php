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

    //Adicionar rotas válidas________________________.
    $router->get('/ola-mundo', function(){
       return "Olá Mundo!"; 
    });

        //$router->get('/exemplo',ExercicioController::exibir());
    $router->get('/exemplo',
    'Aluno\ProjetoPhp\Controller\ExercicioController::exibir');

    $router->post('/exemplo-resultado',
    'Aluno\ProjetoPhp\Controller\ExercicioController::exibirResultado');

    //________________________.

        //rotas Exercício 1 - Lista 1 Refeita
    $router->get('/indexex1',
    'Aluno\PropetoPhp\Controller\Lista1Refeita\Ex1\ResultadoEx1::exibir');

    $router->post('/ex1-resultado',
    'Aluno\PropetoPhp\Controller\Lista1Refeita\Ex1\ResultadoEx1::exibirResultado');

    //________________________.

        //rotas BD Clientes
    $router->get('/cliente/novo',
    'Aluno\ProjetoPhp\Controller\ClientesController::abrirFormularioInserir');

    $router->post('/cliente/inserir',
    'Aluno\ProjetoPhp\Controller\ClientesController::inserirCliente');

    $router->get('/clientes',
    'Aluno\ProjetoPhp\Controller\ClientesController::abrirListaClientes');

    $router->get('/cliente/alterar/{id}',
    'Aluno\ProjetoPhp\Controller\ClientesController::abrirFormularioAlterar');

    $router->post('/cliente/editar/{id}',
    'Aluno\ProjetoPhp\Controller\ClientesController::editarCliente');

    $router->get('/cliente/excluir/{id}',
    'Aluno\ProjetoPhp\Controller\ClientesController::excluirCliente');
    //Fim Rotas Válidas________________________.

    //Checa as entradas do usuário;
    $result = $router->handler();

    if (!$result){
        http_response_code(404);
        echo "Página não encontrada";
        die();
    }   //Resposta caso erro;

    echo $result($router->getParams());
?>