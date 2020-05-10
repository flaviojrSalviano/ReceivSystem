<?php
namespace App\Controller;
use App\Model\Client;

final class ClientController extends Controller {

    public static function index() {
        $clients = (new Client)->selectAll();
        return self::view('client/index', ['clients' => $clients]);
    }

    public static function create() {
        return self::view('client/create');
    }

    public static function store() {
	$name = isset($_POST['name']) ? $_POST['name'] : null;
	$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : null;
	$birthday = isset($_POST['birthday']) ? $_POST['birthday'] : null;
        $address = isset($_POST['address']) ? $_POST['address'] : null;

        (new Client)->save($name, $cpf, $birthday, $address);
        self::redirect('/');
	
    }

    public static function destroy() {
	$id = isset($_GET['id']) ? $_GET['id'] : null;
        (new Client)->remove($id);
        self::redirect('/');
    }
}