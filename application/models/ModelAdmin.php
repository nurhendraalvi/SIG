<?php

/**
 * 
 */
class ModelAdmin extends CI_Model
{
	public function ReadbyData($table){
			$this->db->select('*');
			$this->db->from($table);
			return $this->db->get()->result();
		}
	public function InsertData($table,$data){
			$this->db->insert($table,$data);
		}
	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
		}
	public function edit_data($where, $table){
			return $this->db->get_where($table,$where)->result();
		}
	public function update_data($where, $data, $table){
		$this->db->where($where);
		$this->db->update($table,$data);
		}
}