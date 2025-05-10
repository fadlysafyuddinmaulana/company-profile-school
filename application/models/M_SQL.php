<?php

class M_SQL extends CI_Model
{
	/* data result */

	public function data_book()
	{
		$q = $this->db->query("select * from tb_berita order by id_berita desc limit 10");
		return $q;
	}

	/* get data*/

	public function stok_status($stok)
	{
		$this->db->join('buku', 'buku.id_buku=stok_buku.id_buku');
		$this->db->where('status', $stok);
		return $this->db->get('stok_buku');
	}

	public function get_status($status)
	{
		$this->db->select('status');
		$this->db->set('status');
		$this->db->where('status', $status);
		return $this->db->get('stok_buku');
	}

	public function get_rent_id($status)
	{
		$this->db->where('status', $status);
		return $this->db->get('stok_buku');
	}

	public function get_book($idb)
	{
		$this->db->join('kategori', 'kategori.id_kategori = buku.id_kategori');
		$this->db->join('penerbit', 'penerbit.id_penerbit = buku.id_penerbit');
		$this->db->where('buku.id_buku', $idb);
		return $this->db->get('buku');
	}

	public function get_kelas_siswa($idkelas)
	{
		$this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
		$this->db->where('siswa.id_kelas', $idkelas);
		return $this->db->get('siswa');
	}

	public function get_siswa($id_siswa)
	{
		$this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
		$this->db->where('siswa.id_siswa', $id_siswa);
		return $this->db->get('siswa');
	}

	public function get_status_stok($idsb)
	{
		$this->db->join('buku', 'buku.id_buku = stok_buku.id_buku');
		$this->db->where('stok_buku.status', $idsb);
		return $this->db->get('stok_buku');
	}

	public function get_data_stok($idsb)
	{
		$this->db->get('stok_buku');
		$this->db->where('stok_buku.id_stok', $idsb);
		return $this->db->get('stok_buku');
	}

	public function get_stok($idsb)
	{
		$this->db->join('buku', 'buku.id_buku = stok_buku.id_buku');
		$this->db->where('buku.id_buku', $idsb);
		return $this->db->get('stok_buku');
	}

	/* data manipulation */

	function pick_book($idb)
	{
		$this->db->where('id_buku', $idb);
		$this->db->get('stok_buku');
	}

	function insertData_batch($table, $data)
	{
		$this->db->insert_batch($table, $data);
	}

	public function insert_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function delete_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function get_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}
}
