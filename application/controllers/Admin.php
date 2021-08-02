<?php
/**
 * 
 */
class Admin extends CI_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model('ModelAdmin');
	}
	public function index()
	{
		$this->load->view('Home');
	}
	public function MapsIndex1()
	{
		$data['x'] = $this->db->query("SELECT * FROM `t_kmd`  where Id_Wilayah = 'DIY05'")->result();
		$this->load->view('Admin/ReadMaps1');
	}
	public function MapsIndex2()
	{
		$this->load->view('Admin/ReadMaps2');
	}
	public function ReadDataIndex()
	{
		$x['wilayah'] = $this->db->query("SELECT * FROM `t_wilayah`")->result();
		$x['jenis'] = $this->db->query("SELECT * FROM `t_jenis`")->result();
		$this->load->view('Admin/AdminRead', $x);
	}
	public function InsertIndex()
	{
		$x['wilayah'] = $this->db->query("SELECT * FROM `t_wilayah`")->result();
		$x['kecamatan'] = $this->db->query("SELECT * FROM `t_kecamatan`")->result();
		$x['jenis'] = $this->db->query("SELECT * FROM `t_jenis`")->result();
		$this->load->view('Admin/AdminInsertkomuditas', $x);
	}
	public function InsertIndex2()
	{
		$this->load->view('Admin/AdminInsertJalur');
	}
	public function insertData(){
		$wilayah = $_POST['wil'];
		$kec = $_POST['kec'];
		$jenis = $_POST['jenis'];
		$thn = $_POST['year'];
		$LLT = $_POST['LLT'];
		$LAT = $_POST['LAT'];
		$JP = $_POST['JP'];
		$RRPP = $_POST['RRPP'];
		$RRPL = $_POST['RRPL'];
		$data = array(
			'Id_Wilayah' =>$wilayah,
			'ID' => $kec,
			'Id_Jenis' =>$jenis,
			'Tahun' => $thn,
			'Luas_Lahan_Tanam' => $LLT,
			'Luas_Aktivitas_Tanam' => $LAT,
			'Jumlah_Produktivitas' => $JP,
			'Rata_Rata_Produktivitas_Produk' => $RRPP,
			'Rata-Rata_Produktivitas_Lahan' => $RRPL 
		);
		$this->ModelAdmin->InsertData('t_kmd',$data);
		redirect('Admin/ReadDataIndex');
	}
	public function insertData2(){
		$aktor = $_POST['aktor'];
		$Asal = $_POST['asal'];
		$HASAL = $_POST['hasal'];
		$Tujuan = $_POST['tujuan'];
		$HATU = $_POST['hatu'];
		$Komoditas = $_POST['komoditas'];
		$produksi = $_POST['jml'];
		$persen = $_POST['prosentase'];
		$thn = $_POST['year'];
		$data = array(
			'Asal' => $Asal,
			'Harga_Asal' => $HASAL,
			'Tujuan' => $Tujuan,
			'Harga_Tujuan' => $HATU,
			'Distributor' => $aktor,
			'Tahun' => $thn,
			'komoditas' => $Komoditas,
			'Data_Produksi' => $produksi,
			'Prosentase_Pengiriman' => $persen	
			
		);
		$this->ModelAdmin->InsertData('t_jalur',$data);
		redirect('Admin/ReadDataIndex');
	}
	public function DeleteData($id, $jenis,$tahun)
	{
		$where = array('ID' => $id, 'Id_Jenis' => $jenis,'Tahun' => $tahun );
		$this->ModelAdmin->hapus_data($where,'t_kmd');
		redirect(site_url('Admin/ReadDataIndex'));
	}
	public function EditData($id, $jenis, $tahun){
			$where = array('ID' => $id, 'Id_Jenis' => $jenis,'Tahun' => $tahun );
			$x['komoditas'] = $this->ModelAdmin->edit_data($where,'t_kmd');
			$x['wilayah'] = $this->db->query("SELECT * FROM `t_wilayah`")->result();
			$x['kecamatan'] = $this->db->query("SELECT * FROM `t_kecamatan`")->result();
			$x['jenis'] = $this->db->query("SELECT * FROM `t_jenis`")->result();
			$this->load->view('Admin/AdminUpdatekomuditas',$x);
		}
		public function UpdateData(){
				$tahun = $_POST['year2'];
				$id = $_POST['kec2'];
				$jenis2 = $_POST['jenis2'];
				$wilayah = $_POST['wil'];
				$kec = $_POST['kec'];
				$jenis = $_POST['jenis'];
				$thn = $_POST['year'];
				$LLT = $_POST['LLT'];
				$LAT = $_POST['LAT'];
				$JP = $_POST['JP'];
				$RRPP = $_POST['RRPP'];
				$RRPL = $_POST['RRPL'];
				$data = array(
					'Id_Wilayah' =>$wilayah,
					'ID' => $kec,
					'Id_Jenis' =>$jenis,
					'Tahun' => $thn,
					'Luas_Lahan_Tanam' => $LLT,
					'Luas_Aktivitas_Tanam' => $LAT,
					'Jumlah_Produktivitas' => $JP,
					'Rata_Rata_Produktivitas_Produk' => $RRPP,
					'Rata-Rata_Produktivitas_Lahan' => $RRPL 
				);
			$where = array('ID' => $id,'Tahun' => $tahun, 'Id_Jenis'=> $jenis2 );
			$this->ModelAdmin->edit_data($where, $data,'t_kmd');
			redirect(site_url('Admin/ReadDataIndex'));
		}
}