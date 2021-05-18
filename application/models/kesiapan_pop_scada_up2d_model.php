<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kesiapan_pop_scada_up2d_model extends CI_Model
{
  var $table = 'kesiapan_pop_scada_up2d';
  var $column_order = array(null, 'nama_link', 'sid', 'nama_pop', 'pop', 'beban_pop', 'kapasitas_baterai', 'ketahanan_baterai', 'genset', null); //set column field database for datatable orderable
  var $column_search = array('nama_link', 'sid', 'nama_pop', 'pop', 'beban_pop', 'kapasitas_baterai', 'ketahanan_baterai', 'genset',); //set column field database for datatable searchable 
  var $order = array('id' => 'desc'); // default order

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  private function _get_datatables_query()
  {
    $this->db->from($this->table);

    $i = 0;
    if (isset($_POST['search']['value'])) {
      foreach ($this->column_search as $item) // loop column 
      {
        if ($_POST['search']['value']) // if datatable send POST for search
        {

          if ($i === 0) // first loop
          {
            // $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
            $this->db->like($item, $_POST['search']['value']);
          } else {
            $this->db->or_like($item, $_POST['search']['value']);
          }

          if (count($this->column_search) - 1 == $i); //last loop
          // $this->db->group_end(); //close bracket
        }
        $i++;
      }
    }

    if (isset($_POST['order'])) // here order processing
    {
      $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
    } else if (isset($this->order)) {
      $order = $this->order;
      $this->db->order_by(key($order), $order[key($order)]);
    }
  }

  function get_datatables()
  {
    $this->_get_datatables_query();
    if ($_POST['length'] != -1)
      $this->db->limit($_POST['length'], $_POST['start']);
    $query = $this->db->get();
    return $query->result();
  }

  function count_all()
  {
    $this->db->from($this->table);
    return $this->db->count_all_results();
  }

  function count_filtered()
  {
    $this->_get_datatables_query();
    $query = $this->db->get();
    return $query->num_rows();
  }

  function add_data($nama_link, $sid, $nama_pop, $pop, $beban_pop, $kapasitas_baterai, $ketahanan_baterai, $genset)
  {
    $data = array(
      'nama_link' => $nama_link,
      'sid' => $sid,
      'nama_pop' => $nama_pop,
      'pop' => $pop,
      'beban_pop' => $beban_pop,
      'kapasitas_baterai' => $kapasitas_baterai,
      'ketahanan_baterai' => $ketahanan_baterai,
      'genset' => $genset,
    );

    $result = $this->db->insert($this->table, $data);
    return $result;
  }

  function delete_data($data_id)
  {
    return $this->db->delete($this->table, array('id' => $data_id));
  }

  function tampil_data_by_id($data_id)
  {
    return $this->db->get_where($this->table, array('id' => $data_id), 1)->result_array()[0];
  }

  function edit_data($id, $nama_link, $sid, $nama_pop, $pop, $beban_pop, $kapasitas_baterai, $ketahanan_baterai, $genset)
  {
    $data = array(
      'nama_link' => $nama_link,
      'sid' => $sid,
      'nama_pop' => $nama_pop,
      'pop' => $pop,
      'beban_pop' => $beban_pop,
      'kapasitas_baterai' => $kapasitas_baterai,
      'ketahanan_baterai' => $ketahanan_baterai,
      'genset' => $genset,
    );
    $this->db->where('id', $id);
    $result = $this->db->update($this->table, $data);
    return $result;
  }
}
