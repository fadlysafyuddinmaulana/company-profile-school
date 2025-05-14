<?php

class M_SQL extends CI_Model
{
	/* data result */

	public function data_berita()
	{
		$q = $this->db->query("select * from tb_berita");
		// $q = $this->db->query("select * from tb_berita order by id_berita desc limit 10");
		return $q;
	}

	/* get data*/

	public function stok_status($stok)
	{
		$this->db->join('buku', 'buku.id_buku=stok_buku.id_buku');
		$this->db->where('status', $stok);
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
