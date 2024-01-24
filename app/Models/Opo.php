<?php

namespace App\Models;

use CodeIgniter\Model;

class Opo extends Model
{

public function getWhere($table, $where)
{
	return $this->db->table($table)
	                ->getWhere($where)
	                ->getRow();

   }
   public function rayzhencinta($feby)
{
	return $this->db->table($feby)
	                ->getWhere()
	                ->getResult();

   }
   public function tampil($table)
{
	return $this->db->table($table)
	                ->get()
	                ->getResult();
}
 public function hapus($table,$where)
{
	return $this->db->table($table)
	                ->delete($where);
	                

  }
}