<?php if(!defined('BASEPATH')) exit('Keluar dari sistem')
class Product extends CI_Controller {
public function __construct()
 {
 parent::__construct();
$this->load->model('m_product');
 }
public function index($id=NULL)
 {
 $jml = $this->db->get('products');
//pengaturan pagination
 $config['base_url'] = base_url().'product/index';
 $config['total_rows'] = $jml->num_rows();
 $config['per_page'] = '10';
 $config['first_page'] = 'Awal';
 $config['last_page'] = 'Akhir';
 $config['next_page'] = '&laquo;';
 $config['prev_page'] = '&raquo;';
 
//inisialisasi config
 $this->pagination->initialize($config);
//buat pagination
 $data['halaman'] = $this->pagination->create_links();
//tamplikan data
 $data['query'] = $this->m_product->ambil_products($config['per_page'], $id);
$this->load->view('product_view', $data);

 }
}
?>
