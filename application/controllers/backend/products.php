<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct()
    {
        parent::__construct();   
        $this->load->model('products_model','datamodel');     
    }
	   
	public function index($id=NULL)
	{
	$this->load->library('pagination');
	$this->load->library('table');
	 $jml = $this->db->get('products');

		$config['base_url'] = base_url().'products/index';
 $config['total_rows'] = $jml->num_rows();
 $config['per_page'] = '5';
 $config['first_page'] = 'Awal';
 $config['last_page'] = 'Akhir';
 $config['next_page'] = '«';
 $config['prev_page'] = '»';

//inisialisasi config
 $this->pagination->initialize($config);

//buat pagination
 $data['halaman'] = $this->pagination->create_links();

//tamplikan data
 $data['query'] = $this->db->get('products', $config['per_page']);

		$this->mytemplate->loadBackend('products',$data);
	}

	public function form($mode,$id='')
	{
		$data['title']=($mode=='insert')? 'Add products' : 'Update products';				
		$data['products'] = ($mode=='update') ? $this->datamodel->get_products_by_id($id) : '';
		$this->mytemplate->loadBackend('frmcategories',$data);	
	}

	public function process($mode,$id='')
	{
		
		if(($mode=='insert') || ($mode=='update'))
		{
			$result = ($mode=='insert') ? $this->datamodel->insert_entry() : $this->datamodel->update_entry();
		}else if($mode=='delete'){
			$result = $this->datamodel->hapus($id);			
		}	
		if ($result) redirect(site_url('backend/products'),'location');
	}
	
	private function dependensi($id)
	{
		return $this->datamodel->cek_dependensi($id);
	}
	
	

	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

