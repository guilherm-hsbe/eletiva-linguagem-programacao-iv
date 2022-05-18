<?php
    namespace Aluno\ProjetoPhp\Model\DAO;
    use Aluno\ProjetoPhp\Model\Entity\Clientes;

    class ClientesDAO{
        //MétodosBD
        public function inserir(Clientes $c){
            try{
                $sql = "INSERT INTO `clientes`(`nome`, `email`, `idade`) VALUES (:nome, :email, :idade)";
            } catch(\Exception $e){
                return false;
            }
        }

        public function alterar(Clientes $c){
            try{
                $sql = "UPDATE `clientes` SET `nome`=:nome,`email`=:email,`idade`=:idade WHERE id = :id";
            } catch(\Exception $e){
                return false;
            }
        }

        public function excluir($id){
            try{
                $sql = "DELETE FROM `clientes` WHERE id = :id";
            } catch(\Exception $e){
                return false;
            }
        }

        public function consultar(){}

        public function consultarPorId($id){}
    }
?>