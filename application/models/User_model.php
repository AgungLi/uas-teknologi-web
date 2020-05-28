<?php
defined('BASEPATH') or exit('No direact script access allowed');

class User_model extends CI_Model
{
    // load database
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // listing all user
    public function listing()
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->order_by('id_user', 'desc');
        $query = $this->db->get();
        return $query->result();
    }

    // Detail user
    public function detail($id_user)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id_user', $id_user);
        $this->db->order_by('id_user', 'desc');
        $query = $this->db->get();
        return $query->row();
    }

    // tambah user
    public function tambah($data)
    {
        $this->db->insert('users', $data);
    }

    // Edit
    public function edit($data)
    {
        $this->db->where('id_user', $data['id_user']);
        $this->db->update('users', $data);
    }
    // delete
    public function delete($data)
    {
        $this->db->where('id_user', $data['id_user']);
        $this->db->delete('users', $data);
    }
}
