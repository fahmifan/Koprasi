<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Kopustika extends CI_Model {
	public function login($userdata)
	{
		$result = $this->db->get_where('users',
			array( 
				'email'=> $userdata['email'],
				'password' => $userdata['password'] 
			) 
		);
		return $result;
	}

	
	public function input($identitas)
	{

		if( $this->db->insert('anggota', $identitas))
		{
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function tampilAll()
	{
		$query = $this->db->get('anggota');
		return $query;
	}

	public function ambilNama($no_anggota) {
		$nama_anggota = $this->db->select('nama_anggota')
								 ->where('no_anggota',$no_anggota)
								 ->get('anggota');
		return $nama_anggota->row();
	}

	public function tampilByUser($no_anggota){
		$query = $this->db->get_where('anggota', array('no_anggota' => $no_anggota));
		return $query;
	}
}

/*
	public function tampilAll()
	{
		$query = $this->db->get('identitas');
		return $query;
	}

	public function tampilByUser($npm)
	{
		$query = $this->db->get_where('identitas', array('npm' => $npm));
		return $query;
	}

	public function pilih($npm)
	{
		$query = $this->db->get_where('identitas', array('npm' => $npm))->row();
		return $query;
	}
	
	public function update($npm, $nama, $alamat, $jk)
	{
		$data = array(
			'npm' => $npm,
			'nama' => $nama,
			'alamat' => $alamat,
			'jk' => $jk
		 );
		$this->db->where('npm',$npm);
		$this->db->update('identitas', $data);
	}

	public function delete($npm)
	{
		$this->db->delete('identitas', array('npm' => $npm));
	}*/

/* End of file model_user.php */
/* Location: ./application/models/model_user.php */