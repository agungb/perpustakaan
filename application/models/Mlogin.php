<?php

class Mlogin extends CI_model
{
	function login_user($inputan)
	{
		$user = $inputan["username"];
		$pass = $inputan["password"];

		$this->db->where('username', $user);
		$this->db->where('password', $pass);
		$ambil = $this->db->get('user');

		$datayangcocok = $ambil->num_rows();

		if($datayangcocok > 0)
		{
			$user = $ambil->row_array();

			$this->session->set_userdata("user", $user);

			return "sukses";
		}
		else
		{
			return "gagal";
		}
	}
}

?>
