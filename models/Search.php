<?php
require_once("Config.php");

class Search extends Config
{
    //VIEW
    public function viewDb()
    {
        try {
            $sql = "SELECT * FROM receita";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $result;

        } catch (\Exception $e) {
            die("Erro..." . $e->getMessage());
        }
    }

    //SEARCH
    public function searchDb($titulo)
    {
        try {
            $sql = "SELECT * FROM receita WHERE titulo LIKE :titulo";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(":titulo", "%$titulo%");
            $stmt->execute();
            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\Exception $e) {
            die("Erro..." . $e->getMessage());
        }
    }
}


?>