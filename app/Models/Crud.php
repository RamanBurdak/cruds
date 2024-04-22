<?php

Namespace App\Models;
use CodeIgniter\Model;
class Crud extends Model
{
	protected $table = 'empl';

	public function datainsert($table,$data,)
	{
		$tables = $this->db->table($table);
        $result = $tables->insert($data);
		//$result = $this->db->insert($table, $data);
		return $result;
	}

	public function dataupdate($table, $data, $id)
	{
		 
		
		$db = \Config\Database::connect();
        $builder = $db->table('empl');
        $builder->where('id', $id);
        return $builder->update($data);

	}

	public function datadelete($id)
	{
		
		$db = \Config\Database::connect();
        $builder = $db->table('empl');
		$builder->where('id', $id);
        return $builder->delete();
	}

	public function get_records($table)
	{
		$db = \Config\Database::connect();
        $builder = $db->table('empl');
		
        return $builder->get()->getResultArray();
		
	
		
	}
	public function get_dept($table)
	{
		$db = \Config\Database::connect();
        $builder = $db->table('dept');
        return $builder->get()->getResultArray();
		
	
		
	}

	public function find_record_by_id($table, $id)
	{
		$db = \Config\Database::connect();
        $builder = $db->table('empl');
        $builder->where('id', $id);
        return $builder->get()->getrow();
		
	}
}