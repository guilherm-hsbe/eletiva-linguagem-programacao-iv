<?php
    namespace Aluno\ProjetoPhp\Controller;
    use Aluno\ProjetoPhp\Model\DAO\ClientesDAO;
    use Aluno\ProjetoPhp\Model\Entity\Clientes;

    class ClientesController{
        //Static Function Methods
        public static function abrirFormularioInserir(){
            require_once "../src/View/inserir_cliente.php";
        }

        public static function inserirCliente(){
            $cliente = new Clientes();
            $cliente->setEmail($_POST['email']);
            $cliente->setIdade($_POST['idade']);
            $cliente->setNome($_POST['nome']);

            $dao = new ClientesDAO();
            if ($dao->inserir($cliente)){
                return "Inserido com sucesso!";
            } return "Erro ao inserir";
        }
    }
?>