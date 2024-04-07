<?php
if ( !defined( 'BASEPATH' ) )exit( 'No direct script access allowed' );

Class ModelQuote extends CI_Model 
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
    }
    public function manage_quote()
    {
        $user_id = $this->session->userdata('user_id');
        $this->db->select( 'quote_tbl.*,CONCAT(user_tbl.fname," ",user_tbl.lname) as salesman' );
        $this->db->from( 'quote_tbl' );
        $this->db->join( 'user_tbl','user_tbl.user_id = quote_tbl.user_id');
        if($user_id != 1)
        {
            $this->db->where( 'user_tbl.user_id', $user_id);
        }
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    public function add_quote_process($data)
    {
        $this->db->insert( 'quote_tbl', $data );            
        if ( $this->db->affected_rows() > 0 ) 
        {
            $response_object = array( 'success' => true, 'status_code' => '1', 'message' => 'Quote added successful.');
        }
        else
        {
            $response_object = array( 'success' => false, 'status_code' => '0', 'message' => 'failed.' );
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