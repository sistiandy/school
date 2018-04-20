<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/** 
* Student Model Class
 *
 * @package     SYSCMS
 * @subpackage  Models
 * @category    Models
 * @author      Sistiandy Syahbana nugraha <sistiandy.web.id>
 */

class Student_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    // Get From Databases
    function get($params = array())
    {
        if(isset($params['student_id']))
        {
            $this->db->where('student.student_id', $params['student_id']);
        }

        $this->db->order_by('student_id', 'desc');
        

        $this->db->select('student.student_id, student_name, student_address');
        $res = $this->db->get('student');

        if(isset($params['student_id']))
        {
            return $res->row_array();
        }
        else
        {
            return $res->result_array();
        }
    }

    // Add and update to database
    function add($data = array()) {
        
         if(isset($data['student_id'])) {
            $this->db->set('student_id', $data['student_id']);
        }
        
         if(isset($data['student_name'])) {
            $this->db->set('student_name', $data['student_name']);
        }
        
         if(isset($data['student_address'])) {
            $this->db->set('student_address', $data['student_address']);
        }
        
        if (isset($data['student_id'])) {
            $this->db->where('student_id', $data['student_id']);
            $this->db->update('student');
            $id = $data['student_id'];
        } else {
            $this->db->insert('student');
            $id = $this->db->insert_id();
        }

        $status = $this->db->affected_rows();
        return ($status == 0) ? FALSE : $id;
    }
    
    // Delete to database
    function delete($id) {
        $this->db->where('student_id', $id);
        $this->db->delete('student');
    }
    
}
