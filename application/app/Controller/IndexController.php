<?php
namespace App\Controller;

final class IndexController extends Controller {

	public static function index() {
		return self::view('index');
	}
}