<?php
class M_pekerja extends CI_model{
  public function semuadata(){
  return  $this->db -> get('tb_pekerja')->result_array();
  }
  public function proses_tambah_pekerja(){
    $data = [
      "nama_lengkap" => $this->input->post('nama_lengkap'),
      "umur" => $this->input->post('umur'),
      "gender" => $this->input->post('gender'),
      "jabatan" => $this->input->post('jabatan'),
      "gaji" => $this->input->post('gaji'),
    ];
    $this->db->insert('tb_pekerja',$data);
  }
  public function hapus_data($id_pekerja){
    $this->db->where ('id_pekerja',$id_pekerja);
    $this->db->delete('tb_pekerja');
  }
  public function ambil_id_pekerja($id_pekerja){
    return $this->db->get_where('tb_pekerja',['id_pekerja'=>$id_pekerja])->row_array();
  }
  public function proses_edit_pekerja(){
    $data = [
      "nama_lengkap" => $this->input->post('nama_lengkap'),
      "umur" => $this->input->post('umur'),
      "gender" => $this->input->post('gender'),
      "jabatan" => $this->input->post('jabatan'),
      "gaji" => $this->input->post('gaji'),
    ];
    $this->db->where ('id_pekerja',$this->input->post('id_pekerja'));
    $this->db->update('tb_pekerja',$data);
  }
}

 ?>
