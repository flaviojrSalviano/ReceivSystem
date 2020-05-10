<?php
namespace App\Controller;
use App\Model\Debt;

final class DebtController extends Controller {

    public static function index() {
        $debts = (new Debt)->selectAll();
        return self::view('debt/index', ['debts' => $debts]);
    }

    public static function create() {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        return self::view('debt/create', ['client_id' => $id]);
    }

    public static function store() {
	$client_id = isset($_POST['client_id']) ? $_POST['client_id'] : null;
	$title = isset($_POST['title']) ? $_POST['title'] : null;
	$value = isset($_POST['value']) ? $_POST['value'] : null;
        $due_date = isset($_POST['due_date']) ? $_POST['due_date'] : null;

        (new Debt)->save($client_id, $title, $value, $due_date);
        self::redirect('/');
	
    }

    public static function destroy() {
	$id = isset($_GET['id']) ? $_GET['id'] : null;
        (new Debt)->remove($id);
        self::redirect('/');
    }
}