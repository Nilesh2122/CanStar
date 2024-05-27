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
        else{
            $this->db->where( 'quote_tbl.status !=', 1);
        }
        $this->db->order_by('quote_id', 'desc');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    public function getProductdata()
    {
        $this->db->select( '*' );
        $this->db->from( 'product_tbl' );
        $this->db->where( 'product_tbl.type', 1);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    public function add_quote_process($data)
    {
        $this->db->insert( 'quote_tbl', $data );            
        if ( $this->db->affected_rows() > 0 ) 
        {
            $quote_id =  $this->db->insert_id();
            $this->insert_image_data($quote_id);
            $this->insert_annotation_data($quote_id);
            $response_object = array( 'success' => true, 'status_code' => '1', 'message' => 'Quote added successful.');
        }
        else
        {
            $response_object = array( 'success' => false, 'status_code' => '0', 'message' => 'failed.' );
        }
        return $response_object;
    }
    public function view_quote($quote_id)
    {
        $this->db->from( 'quote_tbl' );
        $this->db->where( 'quote_tbl.quote_id', $quote_id);
        $query = $this->db->get();
        $result = $query->row_array();
        
        $this->db->from( 'access_image_tbl' );
        $this->db->where( 'access_image_tbl.quote_id', $quote_id);
        $query = $this->db->get();
        $result['access_image'] = $query->result_array();

        $this->db->from( 'annotation_image_tbl' );
        $this->db->where( 'annotation_image_tbl.quote_id', $quote_id);
        $query = $this->db->get();
        $result['annotation_image'] = $query->result_array();

        $result['products'] = json_decode($result['product_data'], true);
       /*  echo "<pre>";
		print_r($result['products']);
		echo "</pre>";
		exit();  */
        $i=0;
        foreach($result['products'] as $row)
        {
            $this->db->from( 'product_tbl' );
            $this->db->where( 'product_tbl.product_title', $row['product']);
            $query = $this->db->get();
            $data = $query->row_array();
            /* echo "<pre>";
            print_r($data);
            echo "</pre>";
            exit(); */
            $result['products'][$i]['product_description'] = $data['product_description'];
            $result['products'][$i]['price'] = $data['price'];
            $i++;
        }
        $result['custom_product_data'] = json_decode($result['custom_product_data'], true);
       /*  echo "<pre>";
            print_r($result);
            echo "</pre>";
            exit(); */
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

    public function insert_image_data($quote_id)
    {
        // Initialize image data array
        $image_data = [];

        // Check for plug image
        if (!empty($_FILES['plug-image']['name'])) {
            $plug_image = $_FILES['plug-image'];
            $plug_file_name = $plug_image['name'];
            $plug_file_tmp = $plug_image['tmp_name'];
            $plug_file_path = 'assets/uploads/' . $plug_file_name; // Change this path to your plug images directory
            move_uploaded_file($plug_file_tmp, $plug_file_path);

            // Add plug image data to array
            $image_data[] = [
                'quote_id' => $quote_id,
                'access_type' => 'plug',
                'data' => $plug_file_path,
                'data_type' => 1,
                'created_at' => date('Y-m-d H:i:s')
            ];
        }
        else{
            $image_data[] = [
                'quote_id' => $quote_id,
                'access_type' => 'plug',
                'data' => $_POST['plug-notes'],
                'data_type' => 2,
                'created_at' => date('Y-m-d H:i:s')
            ];
        }

        // Check for controller image
        if (!empty($_FILES['controller-image']['name'])) {
            $controller_image = $_FILES['controller-image'];
            $controller_file_name = $controller_image['name'];
            $controller_file_tmp = $controller_image['tmp_name'];
            $controller_file_path = 'assets/uploads/' . $controller_file_name; // Change this path to your controller images directory
            move_uploaded_file($controller_file_tmp, $controller_file_path);

            // Add controller image data to array
            $image_data[] = [
                'quote_id' => $quote_id,
                'access_type' => 'controller',
                'data' => $controller_file_path,
                'data_type' => 1,
                'created_at' => date('Y-m-d H:i:s')
            ];
        }
        else{
            $image_data[] = [
                'quote_id' => $quote_id,
                'access_type' => 'controller',
                'data' => $_POST['controller-notes'],
                'data_type' => 2,
                'created_at' => date('Y-m-d H:i:s')
            ];
        }
       /*  echo "<pre>";
		print_r($image_data);
		print_r(empty($_FILES['controller-image']));
		echo "</pre>";
		exit(); */ 
        // Insert image data into the database
        foreach ($image_data as $data) {
            $this->insert_image_data_process($data);
        }    
    }

    public function insert_image_data_process($data) {
        $this->db->insert('access_image_tbl', $data);
        return $this->db->insert_id();
    }


    public function insert_annotation_data($quote_id)
    {
        $image_data = [];

        // Process drawnLinesInput and fullyEditedInput
        $fileData = $_FILES;
        $index = 1;
        $index1 = 1;
        foreach ($fileData as $key => $value) {
            if (strpos($key, 'drawnLinesInput_') === 0) {
                $drawn_lines_image_data = $this->process_image($key, 'drawnLines', $quote_id,$index);
                $image_data = array_merge($image_data, $drawn_lines_image_data);
                $index++;
            } elseif (strpos($key, 'fullyEditedInput_') === 0) {
                $fully_edited_image_data = $this->process_image($key, 'fullyEdited', $quote_id,$index1);
                $image_data = array_merge($image_data, $fully_edited_image_data);
                $index1++;
            }
           
        }

       /*  echo "<pre>";
		print_r($image_data);
		echo "</pre>";
		exit();  */
        // Insert image data into the database
        foreach ($image_data as $data) {
            $this->insert_annotation_image_data($data);
        }
    }
    private function process_image($file_input_name, $access_type, $quote_id, $index)
    {
        /* echo "<pre>";
		print_r($index);
		echo "</pre>";
		exit();  */
        $image_data = [];
        
        if (!empty($_FILES[$file_input_name]['name'])) {
            $file_info = $_FILES[$file_input_name];

            // Handle file upload
            $file_name = uniqid() .$file_info['name'];
            $file_tmp = $file_info['tmp_name'];
            $file_path = 'assets/uploads/' . $file_name; // Change this path to your upload directory
            move_uploaded_file($file_tmp, $file_path);

            // Add image data to array
            $image_data[] = [
                'quote_id' => $quote_id,
                'type' => $access_type,
                'identify_image_name' => $file_name,
                'image_url' => $file_path,
                'identify_image_name' => ($index != 1) ? $_POST['identify_photo_'.$index] :$_POST['identify_photo'],
                'total_numerical_box' => ($index != 1) ? $_POST['sumInputBox_'.$index] :$_POST['sumInputBox'],
                'unit_price' => ($index != 1) ? $_POST['unite_price_'.$index] :$_POST['unite_price'],
                'total_amount' => ($index != 1) ? $_POST['amount_'.$index] :$_POST['amount'],
                'no_peaks' => ($index != 1) ? $_POST['peaks_'.$index] :$_POST['peaks'],
                'no_jumper' => ($index != 1) ? $_POST['jumper_'.$index] :$_POST['jumper'],
                'color' => ($index != 1) ? $_POST['color_'.$index] :$_POST['color'],
                'created_at' => date('Y-m-d H:i:s')
            ];
        }

        return $image_data;
    }
    private function insert_annotation_image_data($data)
    {
        // Insert image data into the database
        $this->db->insert('annotation_image_tbl', $data);
    }

    public function send_for_approval($quote_id)
    {
        $data['status'] = 2;
        $this->db->where('quote_id',$quote_id);
        $this->db->update('quote_tbl', $data);
        if ( $this->db->affected_rows() > 0 ) 
        {
            $response_object = array( 'success' => true, 'status_code' => 1, 'message' => 'Quote send successful.');
        } 
        else
        {
            $response_object = array( 'success' => false, 'status_code' => 0, 'message' => 'Something went wrong!');
        }
       
        return $response_object;
    }
    public function send_for_approve($quote_id)
    {
        $data['status'] = 3;
        $this->db->where('quote_id',$quote_id);
        $this->db->update('quote_tbl', $data);
        if ( $this->db->affected_rows() > 0 ) 
        {
            $response_object = array( 'success' => true, 'status_code' => 1, 'message' => 'Quote approve successful.');
        } 
        else
        {
            $response_object = array( 'success' => false, 'status_code' => 0, 'message' => 'Something went wrong!');
        }
       
        return $response_object;
    }
    public function edit_quote($quote_id)
    {
        $this->db->from( 'quote_tbl' );
        $this->db->where( 'quote_tbl.quote_id', $quote_id);
        $query = $this->db->get();
        $result = $query->row_array();
        
        $this->db->from( 'access_image_tbl' );
        $this->db->where( 'access_image_tbl.quote_id', $quote_id);
        $query = $this->db->get();
        $result['access_image'] = $query->result_array();

        $this->db->from( 'annotation_image_tbl' );
        $this->db->where( 'annotation_image_tbl.quote_id', $quote_id);
        $query = $this->db->get();
        $result['annotation_image'] = $query->result_array();

        $merged_data = array();

        foreach ($result['annotation_image'] as $item) {
            $key = $item['identify_image_name'];
            $common_fields = array(
                'identify_image_name' => $item['identify_image_name'],
                'color' => $item['color'],
                'total_numerical_box' => $item['total_numerical_box'],
                'unit_price' => $item['unit_price'],
                'total_amount' => $item['total_amount'],
                'no_peaks' => $item['no_peaks'],
                'no_jumper' => $item['no_jumper'],
                'created_at' => $item['created_at'],
                'modified_at' => $item['modified_at']
            );
            
            if (!isset($merged_data[$key])) {
                $merged_data[$key] = array(
                    'common_fields' => $common_fields,
                    'details' => array()
                );
            }
            $merged_data[$key]['details'][] = array(
                'annotation_image_id' => $item['annotation_image_id'],
                'quote_id' => $item['quote_id'],
                'image_url' => $this->urlToBase64($item['image_url']),
                'type' => $item['type']
            );
        }

        // Reindex with numeric keys
        $reindexed_data = array_values($merged_data);

        $result['edited_image'] = $reindexed_data;

        /* echo "<pre>";
		print_r($merged_data);
		echo "</pre>";
		exit();  */
        $result['products'] = json_decode($result['product_data'], true);
       /*  echo "<pre>";
		print_r($result['products']);
		echo "</pre>";
		exit();  */
        $i=0;
        foreach($result['products'] as $row)
        {
            $this->db->from( 'product_tbl' );
            $this->db->where( 'product_tbl.product_title', $row['product']);
            $query = $this->db->get();
            $data = $query->row_array();
            /* echo "<pre>";
            print_r($data);
            echo "</pre>";
            exit(); */
            $result['products'][$i]['product_description'] = $data['product_description'];
            $result['products'][$i]['price'] = $data['price'];
            $i++;
        }
        $result['custom_product_data'] = json_decode($result['custom_product_data'], true);
       /*  echo "<pre>";
            print_r($result);
            echo "</pre>";
            exit(); */
        return $result;
    }
    function urlToBase64($imageUrl) {
        // Fetch image content
        $imageContent = file_get_contents($imageUrl);
    
        if ($imageContent !== false) {
            // Get image MIME type
            $finfo = new finfo(FILEINFO_MIME_TYPE);
            $mimeType = $finfo->buffer($imageContent);
    
            // Base64 encode the image content
            $base64Data = 'data:' . $mimeType . ';base64,' . base64_encode($imageContent);
    
            return $base64Data;
        } else {
            return false; // Failed to fetch image content
        }
    }

    public function edit_quote_process($data)
    {
        /* echo "<pre>";
		print_r($data);
		print_r($_FILES);
		echo "</pre>";
		exit();  */
        $this->db->where('quote_id', $data['quote_id']);
        $this->db->update('quote_tbl',$data);           
        if ( $this->db->affected_rows() > 0 ) 
        {
            $this->edit_image_data($data['quote_id']);
            $this->edit_annotation_data($data['quote_id']);
            $response_object = array( 'success' => true, 'status_code' => '1', 'message' => 'Quote edit successful.');
        }
        else
        {
            $response_object = array( 'success' => false, 'status_code' => '0', 'message' => 'failed.' );
        }
        return $response_object;
    }
    public function edit_image_data($quote_id)
    {
        $this->db->where('quote_id', $quote_id);
        $this->db->delete('access_image_tbl');

        $image_data = [];
        if (!empty($_FILES['plug-image']['name'])) {
            $plug_image = $_FILES['plug-image'];
            $plug_file_name = $plug_image['name'];
            $plug_file_tmp = $plug_image['tmp_name'];
            $plug_file_path = 'assets/uploads/' . $plug_file_name; // Change this path to your plug images directory
            move_uploaded_file($plug_file_tmp, $plug_file_path);

            // Add plug image data to array
            $image_data[] = [
                'quote_id' => $quote_id,
                'access_type' => 'plug',
                'data' => $plug_file_path,
                'data_type' => 1,
                'created_at' => date('Y-m-d H:i:s')
            ];
        }
        else{
            $image_data[] = [
                'quote_id' => $quote_id,
                'access_type' => 'plug',
                'data' => $_POST['plug-notes'],
                'data_type' => 2,
                'created_at' => date('Y-m-d H:i:s')
            ];
        }

        // Check for controller image
        if (!empty($_FILES['controller-image']['name'])) {
            $controller_image = $_FILES['controller-image'];
            $controller_file_name = $controller_image['name'];
            $controller_file_tmp = $controller_image['tmp_name'];
            $controller_file_path = 'assets/uploads/' . $controller_file_name; // Change this path to your controller images directory
            move_uploaded_file($controller_file_tmp, $controller_file_path);

            // Add controller image data to array
            $image_data[] = [
                'quote_id' => $quote_id,
                'access_type' => 'controller',
                'data' => $controller_file_path,
                'data_type' => 1,
                'created_at' => date('Y-m-d H:i:s')
            ];
        }
        else{
            $image_data[] = [
                'quote_id' => $quote_id,
                'access_type' => 'controller',
                'data' => $_POST['controller-notes'],
                'data_type' => 2,
                'created_at' => date('Y-m-d H:i:s')
            ];
        }
        foreach ($image_data as $data) {
            $this->insert_image_data_process($data);
        }    
    }
    public function edit_annotation_data($quote_id)
    {
        $this->db->where('quote_id', $quote_id);
        $this->db->delete('annotation_image_tbl');

        $image_data = [];
        $fileData = $_FILES;
        $index = 1;
        $index1 = 1;
        foreach ($fileData as $key => $value) {
            if (strpos($key, 'drawnLinesInput_') === 0) {
                $drawn_lines_image_data = $this->process_image($key, 'drawnLines', $quote_id,$index);
                $image_data = array_merge($image_data, $drawn_lines_image_data);
                $index++;
            } elseif (strpos($key, 'fullyEditedInput_') === 0) {
                $fully_edited_image_data = $this->process_image($key, 'fullyEdited', $quote_id,$index1);
                $image_data = array_merge($image_data, $fully_edited_image_data);
                $index1++;
            }
           
        }
        // Insert image data into the database
        foreach ($image_data as $data) {
            $this->insert_annotation_image_data($data);
        }
    }
}

?>