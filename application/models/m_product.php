<?php if(!defined('BASEPATH')) exit('Keluar dari sistem');
class M_product extends CI_Model
{
public function __construct()
 {
 parent::__construct();
 }
public function ambil_products($num, $offset)
 {
 $this->db->order_by('ProductID', 'ASC');
$data = $this->db->get('products', $num, $offset);
return $data->result();
 }
}
?>
