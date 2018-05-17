<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $data['main_content'] = 'forms/form';
        $this->load->view('dash/dashboard', $data);
    }

    public function exec() {

        if ($this->input->post()) {
            $content = $this->main_model->insert('user_test', $this->input->post());
            if (isset($content)) {
                $result=$this->main_model->retrive_database('user_test');
                if(!write_file("print.txt", $result)){
                        echo "failed";
                }else{
                    echo "Sucessful";
                }
                die;              
                $table_data = $this->main_model->retrive_database('user_test');
                print_r($table_data);
                $print_return=shell_execution('print /d: index.txt');
                echo "<pre>";
                print_r($print_return);
                die;
                
                
                
                
//                if(isset($printing_return)){
//                    echo $printing_return ;
//                    die;
//                    
//                }
//                while ($table_data) {
//                    exit;
//                    file_put_contents("data.txt", $file);
//                    print_r($file);
//                }
//                
            }
        }
    }

}
