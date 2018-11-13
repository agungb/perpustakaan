<?php

class Login extends CI_controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Mlogin');
	}

	function index()
	{
		$data['judul'] = "Form Login";
		$this->load->view('login', $data);

		$inputan = $this->input->post();
		//jika ada inputan
		if($inputan)
		{
			//menjalankan fungsi login_user
			$hasil = $this->Mlogin->login_user($inputan);

			//jika return login_user == sukses
			if($hasil == "sukses")
			{
				redirect("admin/buku");
			}
			else
			{
				redirect("login");
			}
		}
	}

	function logout()
	{
		//menghancurkan session user yang dibuat ketika login
		$this->session->unset_userdata("user");
		redirect("login");
	}
}

?>
