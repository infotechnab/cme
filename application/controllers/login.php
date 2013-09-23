<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->library('session');
    $this->load->helper('url');
    $this->load->helper(array('form', 'url'));
 }

 function index()
 {
      $this->load->library('session');
     if(!$this->session->userdata('logged_in'))
     {
        
        $this->load->view('cme/form');
        $this->load->view('cme/templets/footer');
       
     }
 else {
         redirect('view','refresh');
     }
 }
 
    function validate_credentials()
	{	$this->load->library('session');
                $this->load->library('form_validation');
                $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
                $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
                if($this->form_validation->run() == FALSE)
                     {
                        $this->index();
                     }
                else
                    {
		$this->load->model('dbmodel');
		$query = $this->dbmodel->validate();
                $role=  $this->dbmodel->role();
                foreach ($role as $data)
                {
                    $role = $data->role;
                    $uid = $data->u_id;
                    $id = $data->id;
                    $uname = $data->uname;
                    
                   // $branch = $data->branch;
                }
                               
                $branch = $this->dbmodel->get_branch($id); 
                foreach ($branch as $data)
                {
                    $btitle= $data->b_title;
                    $bcode = $data->b_code;
                }
		if($query) // if the user's credentials validated...
		{
			$data = array( 
				'username' => $role,
                                'id'=>$uid,
                            'bid'=>$id,
                            'btitle'=>$btitle,
                            'bcode'=>$bcode,
                            'name'=>$uname,
                            //'branch'=>$branch,
				'logged_in' => true
			);
			$this->session->set_userdata($data);
			redirect('');
		}
		else // incorrect username or password
                    {
                        $this->session->set_flashdata('message', 'Username or password incorrect');
                        redirect('login');
                        
                    }
                    }
	}
}
?>