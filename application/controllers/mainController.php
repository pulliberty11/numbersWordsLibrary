<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mainController extends CI_Controller {

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
	function __construct() {
		parent::__construct();
		
		$this->load->library("wordNumber");
		$this->load->helper("url");
		$this->load->helper("form");
	} 
	public function index(){
		if(!empty($this->input->post("number"))){
			if(!empty($this->input->post("numbers"))){
				$data["words"] = $this->wordnumber->numberToWord($this->input->post("numbers"));
			}else{
				$data["words"] = "Please enter a valid number";
			}
			$data["wordVal"] = $this->input->post("numbers");
		}else{
			$data["words"] = "";
			$data["wordVal"] = "";
		}
		if(!empty($this->input->post("word"))){
			if(!empty($this->input->post("words"))){
				$data["number"] = $this->wordnumber->wordToNumber($this->input->post("words"));
			}else{
				$data["number"] = "Please enter a valid words";
			}
			if($this->input->post('isComma') == 1){
				$data["number"] = $this->wordnumber->addComma($data["number"]);
				$data["checked"] = "checked";
			}else{
				$data["checked"] = "";
			}
			$data["numVal"] = $this->input->post("words");
			
		}else{
			$data["number"] = "";
			$data["numVal"] = "";
		}
		$this->load->view("welcome_message",$data);
	}
}