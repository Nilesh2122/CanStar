<?php
if ( !defined( 'BASEPATH' ) )exit( 'No direct script access allowed' );

Class ModelUsers extends CI_Model 
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
    }
    public function manage_user()
    {
        $this->db->from( 'user_tbl' );
        $this->db->where( 'active_state', 1  );
        $this->db->order_by( 'user_tbl.user_id', 'asc' );
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    public function add_user_process($data)
    {
        $this->db->select( '*' );
        $this->db->from( 'user_tbl' );
        $this->db->where( 'email', $data[ 'email' ]  );
        $this->db->where( 'active_state', 1  );
        $query = $this->db->get();
        if ( $query->num_rows() > 0 ) 
        {
            $user = $query->row_array();
            $response_object = array( 'success' => false, 'status_code' => 0, 'message' => 'This email id already user. Please try again.');
        } 
        else 
        {
            $this->db->insert( 'user_tbl', $data );            
            if ( $this->db->affected_rows() > 0 ) 
            {
                $response_object = array( 'success' => true, 'status_code' => '1', 'message' => 'User added successful.');
            }
            else
            {
                $response_object = array( 'success' => false, 'status_code' => '0', 'message' => 'failed.' );
            }
        }
        return $response_object;
    }
    public function edit_user($user_id)
    {
        $this->db->from( 'user_tbl' );
        $this->db->where( 'user_tbl.user_id', $user_id);
        $query = $this->db->get();
        $result = $query->row_array();
        return $result;
    }
    public function edit_user_process($data)
    {
        /* $this->db->select( '*' );
        $this->db->from( 'user_tbl' );
        $this->db->where( 'email', $data[ 'email' ]  );
        $query = $this->db->get();
        if ( $query->num_rows() > 0 ) 
        {
            $user = $query->row_array();
            $response_object = array( 'success' => false, 'status_code' => 0, 'message' => 'This email id already user. Please try again.');
        } 
        else 
        { */
            $this->db->where('user_id', $data['user_id']);
            $this->db->update('user_tbl',$data);
            if ( $this->db->affected_rows() > 0 ) 
            {
                $response_object = array( 'success' => true, 'status_code' => '1', 'message' => 'User Edit sucessfully.' );
            } 
            else 
            {
                $response_object = array( 'success' => false, 'status_code' => '0', 'message' => 'failed.');
            }
       /*  } */
        return $response_object;
    }
    public function delete_user($user_id)
    {
        $data['active_state'] = '0';
        $this->db->where('user_id', $user_id);
        $this->db->update('user_tbl',$data);
        if ( $this->db->affected_rows() > 0 ) 
        {
            $response_object = array( 'success' => true, 'status_code' => '1', 'message' => 'User delete sucessfully.' );
        } 
        else 
        {
            $response_object = array( 'success' => false, 'status_code' => '0', 'message' => 'failed.');
        }
        return $response_object;
    }
}

?>