<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar extends CI_Controller {

	function __construct(){
		parent::__construct();

	}

	public function index(){
		echo "ini method index pada controller belajar";
	}

	public function hai(){
      $orang['nama'] = "Iqbal";
      $this -> load->view('view_belajar', $orang);
  }

}
