<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contoh1 extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$this->load->view('layouts/contoh1');
		echo "<h1>Perkenalkan</h1>";
		echo "Halo! Saya Rafli Naufal Alief, seorang web developer. Saya mengubah ide menjadi realitas digital yang menarik. Mari bersama-sama menciptakan pengalaman web yang luar biasa!";
	}

	// public function contoh2()
	// {
	// 	//$this->load->view('layouts/contoh1');
	// 	echo "ini contoh2";
	// }


}
