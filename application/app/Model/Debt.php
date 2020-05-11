<?php 
namespace App\Model; 
use App\DB; 

class Debt { 

public static function selectAll($id = null) { 
$where = ''; 
if (!empty($id)) { $where = 'WHERE id = :id'; } 
$sql = sprintf("SELECT * FROM debts %s ORDER BY due_date ASC", $where); 
$DB = new DB; $stmt = $DB->prepare($sql);
 
        if (!empty($where))
        {
            $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        }
 
        $stmt->execute();
 
        $users = $stmt->fetchAll(\PDO::FETCH_ASSOC);
 
        return $users;
    }

    public static function save($client_id, $title, $value, $due_date)
    {
        if (empty($client_id) || empty($title) || empty($value) || empty($due_date))
        {
            echo "Volte e preencha todos os campos";
            return false;
        }
       
        // insere no banco
        $DB = new DB;
        $sql = "INSERT INTO debts(client_id, title, value, due_date) VALUES(:client_id, :title, :value, :due_date)";
        $stmt = $DB->prepare($sql);
        $stmt->bindParam(':client_id', $client_id);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':value', $value);
        $stmt->bindParam(':due_date', $due_date);
 
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
 
    public static function update($title, $value, $due_date)
    {
        if (empty($title) || empty($value) || empty($due_date))
        {
            echo "Volte e preencha todos os campos";
            return false;
        }

        $DB = new DB;
        $sql = "UPDATE debts SET title = :title, value = :value, due_date = :due_date WHERE id = :id";
        $stmt = $DB->prepare($sql);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':value', $value);
        $stmt->bindParam(':due_date', $due_date);
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
 
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
 
    public static function remove($id)
    {
        if (empty($id))
        {
            echo "ID não informado";
            exit;
        }

        $DB = new DB;
        $sql = "DELETE FROM debts WHERE id = :id";
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

public static function selectByClient($client_id = null) { 
	if (!empty($client_id)) { 
	$where = 'WHERE client_id = :client_id'; 
	$sql = sprintf("SELECT * FROM debts %s ORDER BY due_date ASC", $where); 
	$DB = new DB; 
        $stmt = $DB->prepare($sql);
	$stmt->bindParam(':client_id', $client_id, \PDO::PARAM_INT);
		$stmt->execute();
	 
		$debts = $stmt->fetchAll(\PDO::FETCH_ASSOC);
	 
		return $debts;
    	}
	return [];
} 
}