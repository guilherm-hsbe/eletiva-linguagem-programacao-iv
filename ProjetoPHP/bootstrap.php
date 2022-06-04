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

    //Lista1
        //rotas E1
    $router->get('/index1',
    'Aluno\ProjetoPhp\Controller\Lista1\E1\Resposta1::exibir');

    $router->post('/resposta1',
    'Aluno\ProjetoPhp\Controller\Lista1\E1\Resposta1::exibirResultado');

        //rotas E2
    $router->get('/index2',
    'Aluno\ProjetoPhp\Controller\Lista1\E2\Resposta2::exibir');

    $router->post('/resposta2',
    'Aluno\ProjetoPhp\Controller\Lista1\E2\Resposta2::exibirResultado');

        //rotas E3
    $router->get('/index3',
    'Aluno\ProjetoPhp\Controller\Lista1\E3\Resposta3::exibir');

    $router->post('/resposta3',
    'Aluno\ProjetoPhp\Controller\Lista1\E3\Resposta3::exibirResultado');

        //rotas E4
    $router->get('/index4',
    'Aluno\ProjetoPhp\Controller\Lista1\E4\Resposta4::exibir');

    $router->post('/resposta4',
    'Aluno\ProjetoPhp\Controller\Lista1\E4\Resposta4::exibirResultado');

        //rotas E5
    $router->get('/index5',
    'Aluno\ProjetoPhp\Controller\Lista1\E5\Resposta5::exibir');

    $router->post('/resposta5',
    'Aluno\ProjetoPhp\Controller\Lista1\E5\Resposta5::exibirResultado');

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

    //________________________.

        //rotas BD Produtos
    $router->get('/produto/novo',
    'Aluno\ProjetoPhp\Controller\ProdutosController::abrirFormularioInserir');

    $router->post('/produto/inserir',
    'Aluno\ProjetoPhp\Controller\ProdutosController::inserirProduto');

    $router->get('/produtos',
    'Aluno\ProjetoPhp\Controller\ProdutosController::abrirListaProdutos');

    $router->get('/produto/alterar/{id}',
    'Aluno\ProjetoPhp\Controller\ProdutosController::abrirFormularioAlterar');

    $router->post('/produto/editar/{id}',
    'Aluno\ProjetoPhp\Controller\ProdutosController::editarProduto');

    $router->get('/produto/excluir/{id}',
    'Aluno\ProjetoPhp\Controller\ProdutosController::excluirProduto');
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