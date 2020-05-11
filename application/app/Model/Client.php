<?php 
namespace App\Model; 
use App\DB; 

class Client { 

public static function selectAll($id = null) { 
$where = ''; 
if (!empty($id)) { $where = 'WHERE id = :id'; } 
$sql = sprintf("SELECT * FROM clients %s ORDER BY name ASC", $where); 
$DB = new DB; $stmt = $DB->prepare($sql);
 
        if (!empty($where))
        {
            $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        }
 
        $stmt->execute();
 
        $clients = $stmt->fetchAll(\PDO::FETCH_ASSOC);
 
        return $clients;
    }
 
    public static function save($name, $cpf, $birthday, $address)
    {
        if (empty($name) || empty($cpf) || empty($birthday) || empty($address))
        {
            echo "Volte e preencha todos os campos";
            return false;
        }

        $DB = new DB;
        $sql = "INSERT INTO clients(name, cpf, birthday, address) VALUES(:name, :cpf, :birthday, :address)";
        $stmt = $DB->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':birthday', $birthday);
        $stmt->bindParam(':address', $address);
 
        if ($stmt->execute())
        {
            return true;
        }
        else
        {
            echo "Erro ao cadastrar";
            print_r($stmt->errorInfo());
            return false;
        }
    }
 
    public static function update($id, $name, $cpf, $birthday, $address)
    {
	if(empty($id) )
	{
            echo "Erro ao identificar cliente";
            return false;
	}

        if (empty($name) || empty($cpf) || empty($birthday) || empty($address))
        {
            echo "Volte e preencha todos os campos";
            return false;
        }
          
        $DB = new DB;
        $sql = "UPDATE clients SET name = :name, cpf = :cpf, birthday = :birthday, address = :address WHERE id = :id";
        $stmt = $DB->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':birthday', $birthday);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':id', $id);
 
        if ($stmt->execute())
        {
            return true;
        }
        else
        {
            echo "Erro ao salvar";
            print_r($stmt->errorInfo());
            return false;
        }
    }
 
    public static function remove($id)
    {
        if (empty($id))
        {
            echo "ID não informado";
            exit;
        }

        $DB = new DB;
        $sql = "DELETE FROM clients WHERE id = :id";
        $stmt = $DB->prepare($sql);
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
          
        if ($stmt->execute())
        {
            return true;
        }
        else
        {
            echo "Erro ao remover";
            print_r($stmt->errorInfo());
            return false;
        }
    }
}