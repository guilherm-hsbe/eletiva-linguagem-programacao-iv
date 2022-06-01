<?php
    namespace Aluno\ProjetoPhp\Model\DAO;
    use Aluno\ProjetoPhp\Model\Entity\Produtos;

    class ProdutosDAO{
        //MétodosDAO
        public function inserir(Produtos $pr){
            try{
                $sql = "INSERT INTO `produtos`(`nome`, `descricao`, `valor`) VALUES (:nome, :descricao, :valor)";
                $p = Conexao::conectar()->prepare($sql);
                $p->bindValue(":nome", $pr->getNome());
                $p->bindValue(":descricao", $pr->getDescricao());
                $p->bindValue(":valor", $pr->getValor());
                return $p->execute();

            } catch(\Exception $e){
                return false;
            }
        }

        public function alterar(Produtos $pr){
            try{
                $sql = "UPDATE `produtos` SET `nome`=:nome,`descricao`=:descricao,`valor`=:valor WHERE id = :id";
                $p = Conexao::conectar()->prepare($sql);
                $p->bindValue(":nome", $pr->getNome());
                $p->bindValue(":descricao", $pr->getDescricao());
                $p->bindValue(":valor", $pr->getValor());
                $p->bindValue(":id", $pr->getId());
                return $p->execute();

            } catch(\Exception $e){
                return false;
            }
        }

        public function excluir($id){
            try{
                $sql = "DELETE FROM `produtos` WHERE id = :id";
                $p = Conexao::conectar()->prepare($sql);
                $p->bindValue(":id", $id);
                return $p->execute();

            } catch(\Exception $e){
                return false;
            }
        }

        public function consultar(){
            try{
                $sql = "SELECT * FROM produtos";
                return Conexao::conectar()->query($sql);

            } catch(\Exception $e){
                return false;
            }
        }

        public function consultarPorId($id){
            try{
                $sql = "SELECT * FROM produtos WHERE id = :id";
                $p = Conexao::conectar()->prepare($sql);
                $p->bindValue(":id", $id);
                return $p->fetch();
                
            } catch(\Exception $e){
                return false;
            }
        }
    }
?>