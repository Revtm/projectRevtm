<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar extends CI_Controller {

	function __construct(){
		parent::__construct();

	}

	public function index(){
    $orang['nama'] = "Iqbal";
    $this -> load->view('view_belajar', $orang);
	}

	public function hai(){
      $orang['nama'] = "Iqbal";
      $this -> load->view('view_belajar', $orang);
  }

}
