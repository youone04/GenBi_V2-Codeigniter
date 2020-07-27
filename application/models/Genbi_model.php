<?php
class Genbi_model extends CI_model{
	//model segala seuatu berhubungan dengan query database

	public function getAllData(){
		// echo "ok";
		// $query = $this->db->get("user");
		
		// return $query->result_array();

		//untuk mengambil data dari database dengan get('nama table')
		return $this->db->query('SELECT * from berita ORDER bY id_berita DESC')->result_array();
		
	}//getAllData

	public function getDataBerita($limit, $start){
		// echo "ok";
		// $query = $this->db->get("user");
		
		// return $query->result_array();

		//untuk mengambil data dari database dengan get('nama table')
		$this->db->order_by('id_berita', 'DESC');
		return $this->db->get('berita',$limit, $start)->result_array();
	}//getAllData

	public function getUbahBerita(){
		// echo "ok";
		// $query = $this->db->get("user");
		
		// return $query->result_array();

		//untuk mengambil data dari database dengan get('nama table')
		$this->db->order_by('id_berita', 'DESC');
		return $this->db->get('berita')->result_array();
	}//getAllData

	public function getAllDataPengumuman(){
		// echo "ok";
		// $query = $this->db->get("user");
		
		// return $query->result_array();

		//untuk mengambil data dari database dengan get('nama table')
		return $this->db->query('SELECT * from pengumuman ORDER bY id_pengumuman DESC')->result_array();
		
	}//end getAllDataPengumuman

	public function InputBerita($data){

		$this->db->insert('berita',$data);
	}//end InputBerita

	public function getIdSelengkapnya($id){
		return $this->db->query('SELECT * FROM berita WHERE id_berita = '.$id)->row_array();
	}//getIdSelengkapnya berita

	public function getIdSelengkapnyaPengumuman($id){
		return $this->db->query('SELECT * FROM pengumuman WHERE id_pengumuman = '.$id)->row_array();
	}//getIdSelengkapnya pengumuman

	public function hapusBeritaById($id){

		 $_id = $this->db->get_where('berita',['id_berita' => $id])->row();//ngambil data dari database dengan id yang ada pada parameter

		$query =$this->db->query('DELETE FROM berita WHERE id_berita = '.$id);//query delete

		if($query){
                unlink("lampiran/".$_id->file_lampiran);//file_lampiran merupkan nama field dari database
                //ngambil nama doang

                //$_id->file_lampiran = fieldnya file lampiran dari id $_id
            }
            return $query;
	}

	public function UbahBerita($data){
		$this->db->where('id_berita',$this->input->post('id_berita'));
		$this->db->update('berita',$data);
	}

	


}//end genbi model


?>