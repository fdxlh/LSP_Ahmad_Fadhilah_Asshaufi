<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('m_data');
		// cek session yang login, 
		// jika session status tidak sama dengan session telah_login, berarti pengguna belum login 
		// maka halaman akan di alihkan kembali ke halaman login. 
		if ($this->session->userdata('status') != "telah_login") {
			redirect(base_url() . 'login?alert=belum_login');
		}
	}

	public function index()
	{
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_index');
		$this->load->view('dashboard/v_footer');
	}

	public function keluar()
	{
		$this->session->sess_destroy();
		redirect('login?alert=logout');
	}
	// -----------------------------------MAHASISWA--------------------------------------------
	public function mahasiswa()
	{

		$data['mahasiswa_ahmadfadhilahasshaufi'] = $this->m_data->get_data('mahasiswa_ahmadfadhilahasshaufi')->result();
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_mahasiswa', $data);
		$this->load->view('dashboard/v_footer');
	}

	public function mahasiswa_tambah()
	{
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_mahasiswa_tambah');
		$this->load->view('dashboard/v_footer');
	}

	public function mahasiswa_aksi()
	{
		$this->form_validation->set_rules('NIM', 'Nama', 'required');
		if ($this->form_validation->run() != false) {
			$mahasiswa = $this->input->post('mahasiswa_ahmadfadhilahasshaufi');
			$NIM = $this->input->post('NIM');
			$nama = $this->input->post('nama');
			$tanggal_lahir = $this->input->post('tanggal_lahir');
			$Alamat = $this->input->post('Alamat');
			$data = array(
				'NIM' => $NIM,
				'nama' => $nama,
				'tanggal_lahir' => $tanggal_lahir,
				'Alamat' => $Alamat,
			);
			$this->m_data->insert_data($data, 'mahasiswa_ahmadfadhilahasshaufi');
			redirect(base_url() . 'dashboard/mahasiswa');
		} else {
			$this->load->view('dashboard/v_header');
			$this->load->view('dashboard/v_mahasiswa_tambah');
			$this->load->view('dashboard/v_footer');
		}
	}

	public function mahasiswa_edit($NIM)
	{
		$where = array(
			'NIM' => $NIM
		);
		$data['mahasiswa_ahmadfadhilahasshaufi'] = $this->m_data->edit_data($where, 'mahasiswa_ahmadfadhilahasshaufi')->result();
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_mahasiswa_edit', $data);
		$this->load->view('dashboard/v_footer');
	}
	
	public function mahasiswa_update()
	{
		$this->form_validation->set_rules('NIM', 'nama', 'required');
		if ($this->form_validation->run() != false) {
			$NIM = $this->input->post('NIM');
			$nama = $this->input->post('nama');
			$tanggal_lahir = $this->input->post('tanggal_lahir');
			$Alamat = $this->input->post('Alamat');
			$where = array(
				'NIM' => $NIM,
			);
			$data = array(
				'NIM' => $NIM,
				'nama' => $nama,
				'tanggal_lahir' => $tanggal_lahir,
				'Alamat' => $Alamat,
			);
			$this->m_data->update_data($where, $data, 'mahasiswa_ahmadfadhilahasshaufi');
			redirect(base_url() . 'dashboard/mahasiswa');
		} else {
			$NIM = $this->input->post('NIM');
			$where = array(
				'NIM' => $NIM
			);
			$data['mahasiswa'] = $this->m_data->edit_data($where, 'mahasiswa_ahmadfadhilahasshaufi')->result();
			$this->load->view('dashboard/v_header');
			$this->load->view('dashboard/v_mahasiswa_edit', $data);
			$this->load->view('dashboard/v_footer');
		}
	}

	public function mahasiswa_hapus($NIM)
	{
		$where = array(
			'NIM' => $NIM
		);
		$this->m_data->delete_data($where, 'mahasiswa_ahmadfadhilahasshaufi');
		redirect(base_url() . 'dashboard/mahasiswa');
	}

	// 	// -----------------------------------ukm-----------------------------------------------
	public function ukm()
	{

		$data['ukm_ahmadfadhilahasshaufi'] = $this->m_data->get_data('ukm_ahmadfadhilahasshaufi')->result();
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_ukm', $data);
		$this->load->view('dashboard/v_footer');
	}

	public function ukm_tambah()
	{
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_ukm_tambah');
		$this->load->view('dashboard/v_footer');
	}

	public function ukm_aksi()
	{
		$this->form_validation->set_rules('ID', 'id', 'required');
		if ($this->form_validation->run() != false) {
			$ukm = $this->input->post('ukm_ahmadfadhilahasshaufi');
			$ID = $this->input->post('id');
			$nama_ukm = $this->input->post('nama_ukm');
			$deskripsi = $this->input->post('deskripsi');
			$data = array(
				'ID' => $ID,
				'nama_ukm' => $nama_ukm,
				'deskripsi' => $deskripsi,
			);
			$this->m_data->insert_data($data, 'ukm_ahmadfadhilahasshaufi');
			redirect(base_url() . 'dashboard/ukm');
		} else {
			$this->load->view('dashboard/v_header');
			$this->load->view('dashboard/v_ukm_tambah');
			$this->load->view('dashboard/v_footer');
		}
	}

	public function ukm_edit($ID)
	{
		$where = array(
			'ID' => $ID
		);
		$data['ukm_ahmadfadhilahasshaufi'] = $this->m_data->edit_data($where, 'ukm_ahmadfadhilahasshaufi')->result();
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_ukm_edit', $data);
		$this->load->view('dashboard/v_footer');
	}
	
	public function ukm_update()
	{
		$this->form_validation->set_rules('Nama_ukm', 'nama_ukm', 'required');
		if ($this->form_validation->run() != false) {
			$ID = $this->input->post('ID');
			$nama_ukm = $this->input->post('nama_ukm');
			$deskripsi = $this->input->post('deskripsi');
			$where = array(
				'ID' => $ID,
			);
			$data = array(
				'ID' => $ID,
				'nama_ukm' => $nama_ukm,
				'deskripsi' => $deskripsi,
			);
			$this->m_data->update_data($where, $data, 'ukm_ahmadfadhilahasshaufi');
			redirect(base_url() . 'dashboard/ukm');
		} else {
			$ID = $this->input->post('id');
			$where = array(
				'ID' => $ID
			);
			$data['ukm'] = $this->m_data->edit_data($where, 'ukm_ahmadfadhilahasshaufi')->result();
			$this->load->view('dashboard/v_header');
			$this->load->view('dashboard/v_ukm_edit', $data);
			$this->load->view('dashboard/v_footer');
		}
	}

	public function ukm_hapus($ID)
	{
		$where = array(
			'ID' => $ID
		);
		$this->m_data->delete_data($where, 'ukm_ahmadfadhilahasshaufi');
		redirect(base_url() . 'dashboard/ukm');
	}

// 	// -----------------------------------ARTIKEL-----------------------------------------------
// 	public function artikel()
// 	{

// 		$data['artikel'] = $this->db->query("SELECT * FROM artikel, mahasiswa, pengguna WHERE artikel_mahasiswa=mahasiswa_id and artikel_author=pengguna_id order by artikel_id desc")->result();
        
// 		$this->load->view('dashboard/v_header');
// 		$this->load->view('dashboard/v_artikel', $data);
// 		$this->load->view('dashboard/v_footer');
// 	}

// 	public function artikel_tambah()
// 	{
// 		$data['mahasiswa'] = $this->m_data->get_data('mahasiswa')->result();
// 		$this->load->view('dashboard/v_header');
// 		$this->load->view('dashboard/v_artikel_tambah', $data);
// 		$this->load->view('dashboard/v_footer');
// 	}

// 	public function artikel_aksi()
// 	{
// 		// Wajib isi judul,konten dan mahasiswa 
// 		$this->form_validation->set_rules('judul', 'Judul', 'required|is_unique[artikel.artikel_judul]');
// 		$this->form_validation->set_rules('konten', 'Konten', 'required');
// 		$this->form_validation->set_rules('mahasiswa', 'mahasiswa', 'required');
// 		// Membuat gambar wajib di isi 
// 		if (empty($_FILES['sampul']['name'])) {
// 			$this->form_validation->set_rules('sampul', 'Gambar Sampul', 'required');
// 		}

// 		if ($this->form_validation->run() != false) {

// 			$config['upload_path'] = './gambar/artikel/';
// 			$config['allowed_types'] = 'gif|jpg|png';

// 			$this->load->library('upload', $config);

// 			if ($this->upload->do_upload('sampul')) {
// 				// mengambil data tentang gambar 
// 				$gambar = $this->upload->data();
// 				$tanggal = date('Y-m-d H:i:s');
// 				$judul = $this->input->post('judul');
// 				$slug = strtolower(url_title($judul));
// 				$konten = $this->input->post('konten');
// 				$sampul = $gambar['file_name'];
// 				$author = $this->session->userdata('id');
// 				$mahasiswa = $this->input->post('mahasiswa');
// 				$status = $this->input->post('status');
// 				$data = array(
// 					'artikel_tanggal' => $tanggal,
// 					'artikel_judul' => $judul,
// 					'artikel_slug' => $slug,
// 					'artikel_konten' => $konten,
// 					'artikel_sampul' => $sampul,
// 					'artikel_author' => $author,
// 					'artikel_mahasiswa' => $mahasiswa,
// 					'artikel_status' => $status,
// 				);

// 				$this->m_data->insert_data($data, 'artikel');
// 				redirect(base_url() . 'dashboard/artikel');
// 			} else {
// 				$this->form_validation->set_message('sampul', $data['gambar_error'] = $this->upload->display_errors());
// 				$data['mahasiswa'] = $this->m_data->get_data('mahasiswa')->result();
// 				$this->load->view('dashboard/v_header');
// 				$this->load->view('dashboard/v_artikel_tambah', $data);
// 				$this->load->view('dashboard/v_footer');
// 			}
// 		}
// 	}

// 	public function artikel_edit($id)
// 	{
// 		$where = array(
// 			'artikel_id' => $id
// 		);
// 		$data['artikel'] = $this->m_data->edit_data($where, 'artikel')->result();
// 		$data['mahasiswa'] = $this->m_data->get_data('mahasiswa')->result();
// 		$this->load->view('dashboard/v_header');
// 		$this->load->view('dashboard/v_artikel_edit', $data);
// 		$this->load->view('dashboard/v_footer');
// 	}

// 	public function artikel_update()
// 	{
// 		// Wajib isi judul,konten dan mahasiswa
// 		$this->form_validation->set_rules('judul', 'Judul', 'required');
// 		$this->form_validation->set_rules('konten', 'Konten', 'required');
// 		$this->form_validation->set_rules('mahasiswa', 'mahasiswa', 'required');

// 		if ($this->form_validation->run() != false) {
// 			$id = $this->input->post('id');
// 			$judul = $this->input->post('judul');
// 			$slug = strtolower(url_title($judul));
// 			$konten = $this->input->post('konten');
// 			$mahasiswa = $this->input->post('mahasiswa');
// 			$status = $this->input->post('status');
// 			$where = array(
// 				'artikel_id' => $id
// 			);
// 			$data = array(
// 				'artikel_judul' => $judul,
// 				'artikel_slug' => $slug,
// 				'artikel_konten' => $konten,
// 				'artikel_mahasiswa' => $mahasiswa,
// 				'artikel_status' => $status,
// 			);
// 			$this->m_data->update_data($where, $data, 'artikel');

// 			if (!empty($_FILES['sampul']['name'])) {
// 				$config['upload_path'] = './gambar/artikel/';
// 				$config['allowed_types'] = 'gif|jpg|png';

// 				$this->load->library('upload', $config);

// 				if ($this->upload->do_upload('sampul')) {

// 					// mengambil data tentang gambar 
// 					$gambar = $this->upload->data();

// 					$data = array(
// 						'artikel_sampul' => $gambar['file_name'],
// 					);

// 					$this->m_data->update_data($where, $data, 'artikel');

// 					redirect(base_url() . 'dashboard/artikel');
// 				} else {
// 					$this->form_validation->set_message('sampul', $data['gambar_error'] = $this->upload->display_errors());
// 					$where = array(
// 						'artikel_id' => $id
// 					);
// 					$data['artikel'] = $this->m_data->edit_data($where, 'artikel')->result();
// 					$data['mahasiswa'] = $this->m_data->get_data('mahasiswa')->result();
// 					$this->load->view('dashboard/v_header');
// 					$this->load->view('dashboard/v_artikel_edit', $data);
// 					$this->load->view('dashboard/v_footer');
// 				}
// 			} else {
// 				redirect(base_url() . 'dashboard/artikel');
// 			}
// 		} else {
// 			$id = $this->input->post('id');
// 			$where = array(
// 				'artikel_id' => $id
// 			);
// 			$data['artikel'] = $this->m_data->edit_data($where, 'artikel')->result();
// 			$data['mahasiswa'] = $this->m_data->get_data('mahasiswa')->result();
// 			$this->load->view('dashboard/v_header');
// 			$this->load->view('dashboard/v_artikel_edit', $data);
// 			$this->load->view('dashboard/v_footer');
// 		}
// 	}
// 	public function artikel_hapus($id)
// 	{
// 		$where = array(
// 			'artikel_id' => $id
// 		);
// 		$this->m_data->delete_data($where, 'artikel');
// 		redirect(base_url() . 'dashboard/artikel');
// 	}
}
