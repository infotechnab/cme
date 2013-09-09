<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class view extends CI_Controller {

     function __construct() {
        parent::__construct();
        $this->load->model('dbmodel');
        $this->load->helper('url');
        $this->load->helper(array('form', 'url'));
        $this->load->library("pagination");
    }
	
         public function index() {
             
        if ($this->session->userdata('logged_in')) {
            $data['username'] = Array($this->session->userdata('logged_in'));
            $data['query'] = $this->dbmodel->role();
            $this->load->view('cme/templets/header');
            $this->load->view('cme/find',$data);
            $this->load->view('cme/templets/footer');
            
        } else {
            redirect('login', 'refresh');
        }
    }
    
     public function addcustomerdetail() {
             
        if ($this->session->userdata('logged_in')) {
            
            $config['upload_path'] = './custmr_detail_image/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '500';
            $config['max_width'] = '1024';
            $config['max_height'] = '724';
            $this->load->library('upload', $config);
            
            //$this->load->view('cme/find');
             //$this->load->helper('form');
            
            $this->load->library(array('form_validation', 'session'));
            //set validation rules
            $this->form_validation->set_rules('fname', 'First Name', 'required|xss_clean|max_length[200]');
            $this->form_validation->set_rules('mname', 'Middle Name', 'required|xss_clean');
            $this->form_validation->set_rules('lname', 'Last Name', 'required|xss_clean');
            $this->form_validation->set_rules('address', 'Address', 'required|xss_clean');
            $this->form_validation->set_rules('zone', 'Zone', 'required|xss_clean');
            $this->form_validation->set_rules('sex', 'Gender', 'required|xss_clean');
            
            // validation true
            
             if (($this->form_validation->run() == TRUE))
            {
             if ($_FILES && $_FILES['customerfile']['name'] !== "")
             {
                 if (!$this->upload->do_upload('customerfile'))
                 {
                  $data = array('error' => $this->upload->display_errors('customerfile'));
                  $data['query'] = $this->dbmodel->customer();
                  $this->load->view('cme/templets/header');
                  $this->load->view('cme/customer/index', $data);
                  $this->load->view('cme/templets/footer');
                 }
                 else
                 {
                $data = array('upload_data' => $this->upload->data('customerfile'));
                //============= customer detail==========
                $cusimage = $data['upload_data']['file_name'];

                $cid = $this->input->post('cid');
                $fname = $this->input->post('fname');
                $mname = $this->input->post('mname');
                $lname = $this->input->post('lname');
                $address = $this->input->post('address');
                $distric = $this->input->post('distric');
                $vdc = $this->input->post('vdc');
                $tole = $this->input->post('tole');
                $zone = $this->input->post('zone');
                $country = $this->input->post('country');
                $email = $this->input->post('email');
                $gender = $this->input->post('sex');
                 $year = $this->input->post('dobyear');
                $month = $this->input->post('dobmonth');
                $day = $this->input->post('dobday');
                $dob = $year."-".$month."-".$day;
               // $dob = date("y-m-d");
                $conpersonal = $this->input->post('contactpersonal');
                $conhome = $this->input->post('contacthome');
                $title = $this->input->post('title');
                $userid = $this->input->post('userid');
                $branchid = $this->input->post('brid');
               
                
                //===========customer id detail ================//
                //
                //=======for ctzn =====//
                          
            if ($_FILES && $_FILES['ctznfile']['name'] !== "")
             {
                 if (!$this->upload->do_upload('ctznfile'))
                 {
                  $data = array('error' => $this->upload->display_errors('ctznfile'));
                  $data['query'] = $this->dbmodel->customer();
                  $this->load->view('cme/templets/header');
                  $this->load->view('cme/customer/index', $data);
                  $this->load->view('cme/templets/footer');
                 }
                 else
                 {
                     $data = array('upload_data' => $this->upload->data('ctznfile'));
               
                $ctznimage = $data['upload_data']['file_name'];
            
                $typectzn = $this->input->post('citizenship');
                $ctznid = $this->input->post('ctznid');
                $ctznplace = $this->input->post('ctznplace');
                $year = $this->input->post('ctznyear');
                $month = $this->input->post('ctznmonth');
                $day = $this->input->post('ctznday');
                $ctzndate = $year."-".$month."-".$day;
                $eyear = $this->input->post('ctznyeare');
                $emonth = $this->input->post('ctznmonthe');
                $eday = $this->input->post('ctzndaye');
                $ectzndate = $eyear."-".$emonth."-".$eday;
               
                 }
                 }
             else
             {
                 
                $ctznimage = " ";
                $typectzn = $this->input->post('citizenship');
                $ctznid = $this->input->post('ctznid');
                $ctznplace = $this->input->post('ctznplace');
                $year = $this->input->post('ctznyear');
                $month = $this->input->post('ctznmonth');
                $day = $this->input->post('ctznday');
                $ctzndate = $year."-".$month."-".$day;
                 $eyear = $this->input->post('ctznyeare');
                $emonth = $this->input->post('ctznmonthe');
                $eday = $this->input->post('ctzndaye');
                $ectzndate = $eyear."-".$emonth."-".$eday;
             }
                
                
                //=====for license =======//
             
              if ($_FILES && $_FILES['lfile']['name'] !== "")
             {
                 if (!$this->upload->do_upload('lfile'))
                 {
                  $data = array('error' => $this->upload->display_errors('lfile'));
                  $data['query'] = $this->dbmodel->customer();
                  $this->load->view('cme/templets/header');
                  $this->load->view('cme/customer/index', $data);
                  $this->load->view('cme/templets/footer');
                 }
                 else
                 {
                     $data = array('upload_data' => $this->upload->data('lfile'));
               
                $limage = $data['upload_data']['file_name'];
            
                $typelicense = $this->input->post('license');
                $lid = $this->input->post('lid');
                $lplace = $this->input->post('lplace');
               $lyear = $this->input->post('lyear');
                $lmonth = $this->input->post('lmonth');
                $lday = $this->input->post('lday');
                $ldate = $lyear."-".$lmonth."-".$lday;
                $elyear = $this->input->post('lyeare');
                $elmonth = $this->input->post('lmonthe');
                $elday = $this->input->post('ldaye');
                $eldate = $elyear."-".$elmonth."-".$elday;
                
                 }
                 }
             else
             {
                 
                $limage = " ";
                $typelicense = $this->input->post('license');
                $lid = $this->input->post('lid');
                $lplace = $this->input->post('lplace');
                $lyear = $this->input->post('lyear');
                $lmonth = $this->input->post('lmonth');
                $lday = $this->input->post('lday');
                $ldate = $lyear."-".$lmonth."-".$lday;
                 $elyear = $this->input->post('lyeare');
                $elmonth = $this->input->post('lmonthe');
                $elday = $this->input->post('ldaye');
                $eldate = $elyear."-".$elmonth."-".$elday;
             }            
               
                
                //========for passport ====//
                
                 if ($_FILES && $_FILES['pfile']['name'] !== "")
             {
                 if (!$this->upload->do_upload('pfile'))
                 {
                  $data = array('error' => $this->upload->display_errors('pfile'));
                  $data['query'] = $this->dbmodel->customer();
                  $this->load->view('cme/templets/header');
                  $this->load->view('cme/customer/index', $data);
                  $this->load->view('cme/templets/footer');
                 }
                 else
                 {
                     $data = array('upload_data' => $this->upload->data('pfile'));
               
                $pimage = $data['upload_data']['file_name'];
            
                 $typepassport = $this->input->post('passport');
                $pid = $this->input->post('pid');
                $pplace = $this->input->post('pplace');
                $pyear = $this->input->post('pyear');
                $pmonth = $this->input->post('pmonth');
                $pday = $this->input->post('pday');
                $pdate = $pyear."-".$pmonth."-".$pday;
                $epyear = $this->input->post('pyeare');
                $epmonth = $this->input->post('pmonthe');
                $epday = $this->input->post('pdaye');
                $epdate = $epyear."-".$epmonth."-".$epday;
                
                 }
                 }
             else
             {
                 
                $pimage = " ";
                $typepassport = $this->input->post('passport');
                $pid = $this->input->post('pid');
                $pplace = $this->input->post('pplace');
                $pyear = $this->input->post('pyear');
                $pmonth = $this->input->post('pmonth');
                $pday = $this->input->post('pday');
                $pdate = $pyear."-".$pmonth."-".$pday;
                 $epyear = $this->input->post('pyeare');
                $epmonth = $this->input->post('pmonthe');
                $epday = $this->input->post('pdaye');
                $epdate = $epyear."-".$epmonth."-".$epday;
             }
                      
                
                // =====for others =======//
                
                 if ($_FILES && $_FILES['ofile']['name'] !== "")
             {
                 if (!$this->upload->do_upload('ofile'))
                 {
                  $data = array('error' => $this->upload->display_errors('ofile'));
                  $data['query'] = $this->dbmodel->customer();
                  $this->load->view('cme/templets/header');
                  $this->load->view('cme/customer/index', $data);
                  $this->load->view('cme/templets/footer');
                 }
                 else
                 {
                     $data = array('upload_data' => $this->upload->data('ofile'));
               
                $oimage = $data['upload_data']['file_name'];
            
                $typeother = $this->input->post('other');
                $oid = $this->input->post('oid');
                $oplace = $this->input->post('oplace');
                $oyear = $this->input->post('oyear');
                $omonth = $this->input->post('omonth');
                $oday = $this->input->post('oday');
                $odate = $oyear."-".$omonth."-".$oday;
                $eoyear = $this->input->post('oyeare');
                $eomonth = $this->input->post('omonthe');
                $eoday = $this->input->post('odaye');
                $eodate = $eoyear."-".$eomonth."-".$eoday;
               
                 }
                 }
             else
             {
                 
                $oimage = " ";
                 $typeother = $this->input->post('other');
                $oid = $this->input->post('oid');
                $oplace = $this->input->post('oplace');
                $oyear = $this->input->post('oyear');
                $omonth = $this->input->post('omonth');
                $oday = $this->input->post('oday');
                $odate = $oyear."-".$omonth."-".$oday;
                $eoyear = $this->input->post('oyeare');
                $eomonth = $this->input->post('omonthe');
                $eoday = $this->input->post('odaye');
                $eodate = $eoyear."-".$eomonth."-".$eoday;
             }
                
                $this->dbmodel->add_details($cid,$fname, $lname, $address, $distric,$vdc,$tole,$zone,$country,$email,$cusimage,$gender,$dob,$conpersonal,$conhome,$title,$userid,$branchid,$mname);
                $this->dbmodel->add_id_ctzn($cid,$typectzn,$ctznid,$ctznplace,$ctzndate,$ctznimage,$ectzndate);
                 $this->dbmodel->add_id_license($cid,$typelicense,$lid,$lplace,$ldate,$limage,$eldate);
                 $this->dbmodel->add_id_passport($cid,$typepassport,$pid,$pplace,$pdate,$pimage,$epdate);
                 $this->dbmodel->add_id_other($cid,$typeother,$oid,$oplace,$odate,$oimage,$eodate);
                
                $this->session->set_flashdata('message', 'One Customer added sucessfully');
                redirect('view/cuslist');

                 }
             }
             else
             {
                 //=====customer detail======//
                $cusimage = "";
                $cid = $this->input->post('cid');
                $fname = $this->input->post('fname');
                $mname = $this->input->post('mname');
                $lname = $this->input->post('lname');
                $address = $this->input->post('address');
                $distric = $this->input->post('distric');
                $vdc = $this->input->post('vdc');
                $tole = $this->input->post('tole');
                $zone = $this->input->post('zone');
                $country = $this->input->post('country');
                $email = $this->input->post('email');
                $gender = $this->input->post('sex');
                 $year = $this->input->post('dobyear');
                $month = $this->input->post('dobmonth');
                $day = $this->input->post('dobday');
                $dob = $year."-".$month."-".$day;
                
                $conpersonal = $this->input->post('contactpersonal');
                $conhome = $this->input->post('contacthome');
                $title = $this->input->post('title');
                 $userid = $this->input->post('userid');
                $branchid = $this->input->post('brid');
                
                
                
                 //===========customer id detail ================//
                //
                if ($_FILES && $_FILES['ctznfile']['name'] !== "")
             {
                 if (!$this->upload->do_upload('ctznfile'))
                 {
                  $data = array('error' => $this->upload->display_errors('ctznfile'));
                  $data['query'] = $this->dbmodel->customer();
                  $this->load->view('cme/templets/header');
                  $this->load->view('cme/customer/index', $data);
                  $this->load->view('cme/templets/footer');
                 }
                 else
                 {
                     $data = array('upload_data' => $this->upload->data('ctznfile'));
               
                $ctznimage = $data['upload_data']['file_name'];
            
                $typectzn = $this->input->post('citizenship');
                $ctznid = $this->input->post('ctznid');
                $ctznplace = $this->input->post('ctznplace');
                $year = $this->input->post('ctznyear');
                $month = $this->input->post('ctznmonth');
                $day = $this->input->post('ctznday');
                $ctzndate = $year."-".$month."-".$day;
                 $eyear = $this->input->post('ctznyeare');
                $emonth = $this->input->post('ctznmonthe');
                $eday = $this->input->post('ctzndaye');
                $ectzndate = $eyear."-".$emonth."-".$eday;
                 }
                 }
             else
             {
                 
                $ctznimage = " ";
                $typectzn = $this->input->post('citizenship');
                $ctznid = $this->input->post('ctznid');
                $ctznplace = $this->input->post('ctznplace');
                $year = $this->input->post('ctznyear');
                $month = $this->input->post('ctznmonth');
                $day = $this->input->post('ctznday');
                $ctzndate = $year."-".$month."-".$day;
                 $eyear = $this->input->post('ctznyeare');
                $emonth = $this->input->post('ctznmonthe');
                $eday = $this->input->post('ctzndaye');
                $ectzndate = $eyear."-".$emonth."-".$eday;
             }
                
                //=====for license =======//
              if ($_FILES && $_FILES['lfile']['name'] !== "")
             {
                 if (!$this->upload->do_upload('lfile'))
                 {
                  $data = array('error' => $this->upload->display_errors('lfile'));
                  $data['query'] = $this->dbmodel->customer();
                  $this->load->view('cme/templets/header');
                  $this->load->view('cme/customer/index', $data);
                  $this->load->view('cme/templets/footer');
                 }
                 else
                 {
                     $data = array('upload_data' => $this->upload->data('lfile'));
               
                $limage = $data['upload_data']['file_name'];
            
                $typelicense = $this->input->post('license');
                $lid = $this->input->post('lid');
                $lplace = $this->input->post('lplace');
                $lyear = $this->input->post('lyear');
                $lmonth = $this->input->post('lmonth');
                $lday = $this->input->post('lday');
                $ldate = $lyear."-".$lmonth."-".$lday;
                $elyear = $this->input->post('lyeare');
                $elmonth = $this->input->post('lmonthe');
                $elday = $this->input->post('ldaye');
                $eldate = $elyear."-".$elmonth."-".$elday;
                 }
                 }
             else
             {
                 
                $limage = " ";
                $typelicense = $this->input->post('license');
                $lid = $this->input->post('lid');
                $lplace = $this->input->post('lplace');
                $lyear = $this->input->post('lyear');
                $lmonth = $this->input->post('lmonth');
                $lday = $this->input->post('lday');
                $ldate = $lyear."-".$lmonth."-".$lday;
                $elyear = $this->input->post('lyeare');
                $elmonth = $this->input->post('lmonthe');
                $elday = $this->input->post('ldaye');
                $eldate = $elyear."-".$elmonth."-".$elday;
             }
                
                //========for passport ====//
                
                 if ($_FILES && $_FILES['pfile']['name'] !== "")
             {
                 if (!$this->upload->do_upload('pfile'))
                 {
                  $data = array('error' => $this->upload->display_errors('pfile'));
                  $data['query'] = $this->dbmodel->customer();
                  $this->load->view('cme/templets/header');
                  $this->load->view('cme/customer/index', $data);
                  $this->load->view('cme/templets/footer');
                 }
                 else
                 {
                     $data = array('upload_data' => $this->upload->data('pfile'));
               
                $pimage = $data['upload_data']['file_name'];
            
                $typepassport = $this->input->post('passport');
                $pid = $this->input->post('pid');
                $pplace = $this->input->post('pplace');
                $pyear = $this->input->post('pyear');
                $pmonth = $this->input->post('pmonth');
                $pday = $this->input->post('pday');
                $pdate = $pyear."-".$pmonth."-".$pday;
                $epyear = $this->input->post('pyeare');
                $epmonth = $this->input->post('pmonthe');
                $epday = $this->input->post('pdaye');
                $epdate = $epyear."-".$epmonth."-".$epday;
                 }
                 }
             else
             {
                 
                $pimage = " ";
                $typepassport = $this->input->post('passport');
                $pid = $this->input->post('pid');
                $pplace = $this->input->post('pplace');
                $pyear = $this->input->post('pyear');
                $pmonth = $this->input->post('pmonth');
                $pday = $this->input->post('pday');
                $pdate = $pyear."-".$pmonth."-".$pday;
                $epyear = $this->input->post('pyeare');
                $epmonth = $this->input->post('pmonthe');
                $epday = $this->input->post('pdaye');
                $epdate = $epyear."-".$epmonth."-".$epday;
             }
                
                // =====for others =======//
                
                 if ($_FILES && $_FILES['ofile']['name'] !== "")
             {
                 if (!$this->upload->do_upload('ofile'))
                 {
                  $data = array('error' => $this->upload->display_errors('ofile'));
                  $data['query'] = $this->dbmodel->customer();
                  $this->load->view('cme/templets/header');
                  $this->load->view('cme/customer/index', $data);
                  $this->load->view('cme/templets/footer');
                 }
                 else
                 {
                     $data = array('upload_data' => $this->upload->data('ofile'));
               
                $oimage = $data['upload_data']['file_name'];
            
                $typeother = $this->input->post('other');
                $oid = $this->input->post('oid');
                $oplace = $this->input->post('oplace');
                $oyear = $this->input->post('oyear');
                $omonth = $this->input->post('omonth');
                $oday = $this->input->post('oday');
                $odate = $oyear."-".$omonth."-".$oday;
                $eoyear = $this->input->post('oyeare');
                $eomonth = $this->input->post('omonthe');
                $eoday = $this->input->post('odaye');
                $eodate = $eoyear."-".$eomonth."-".$eoday;
                 }
                 }
             else
             {
                 
                $oimage = " ";
                $typeother = $this->input->post('other');
                $oid = $this->input->post('oid');
                $oplace = $this->input->post('oplace');
                $oyear = $this->input->post('oyear');
                $omonth = $this->input->post('omonth');
                $oday = $this->input->post('oday');
                $odate = $oyear."-".$omonth."-".$oday;
                $eoyear = $this->input->post('oyeare');
                $eomonth = $this->input->post('omonthe');
                $eoday = $this->input->post('odaye');
                $eodate = $eoyear."-".$eomonth."-".$eoday;
             }
                $this->dbmodel->add_details($cid,$fname, $lname, $address, $distric,$vdc,$tole,$zone,$country,$email,$cusimage,$gender,$dob,$conpersonal,$conhome,$title,$userid,$branchid,$mname);
                $this->dbmodel->add_id_ctzn($cid,$typectzn,$ctznid,$ctznplace,$ctzndate,$ctznimage,$ectzndate);
                 $this->dbmodel->add_id_license($cid,$typelicense,$lid,$lplace,$ldate,$limage,$eldate);
                 $this->dbmodel->add_id_passport($cid,$typepassport,$pid,$pplace,$pdate,$pimage,$epdate);
                 $this->dbmodel->add_id_other($cid,$typeother,$oid,$oplace,$odate,$oimage,$eodate);
               
                $this->session->set_flashdata('message', 'One Customer added sucessfully');
                redirect('view/cuslist');
             }
            }
             else
            {
                 $data['query'] = $this->dbmodel->customer();
                 $this->load->view('cme/templets/header');
                $this->load->view('cme/customer/index',$data);
                $this->load->view('cme/templets/footer');
            }          
          
        } else {
            redirect('login', 'refresh');
        }
    }
    
      public function editcus($id)
    {
         if ($this->session->userdata('logged_in') && ($this->session->userdata('username')=="ad")) {
        $data['query']= $this->dbmodel->get_edit_cus($id);
        $data['identy'] = $this->dbmodel->get_iddetail($id);
        //$data['branch']=  $this->dbmodel->branch();
         $this->load->view('cme/templets/header');
         $this->load->view('cme/customer/editcus',$data);
          $this->load->view('cme/templets/footer');
        
         } else {
            redirect('login', 'refresh');
        }
    } 
    
    public function updatecus() {
        if ($this->session->userdata('logged_in')&& ($this->session->userdata('username')=="ad")) {

            
            $config['upload_path'] = './custmr_detail_image/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '500';
            $config['max_width'] = '1024';
            $config['max_height'] = '724';
            $this->load->library('upload', $config);
            
            //$this->load->view('cme/find');
             //$this->load->helper('form');
            
            $this->load->library(array('form_validation', 'session'));
            //set validation rules
            $this->form_validation->set_rules('fname', 'First Name', 'required|xss_clean|max_length[200]');
            $this->form_validation->set_rules('mname', 'Middle Name', 'required|xss_clean');
            $this->form_validation->set_rules('lname', 'Last Name', 'required|xss_clean');
            $this->form_validation->set_rules('address', 'Address', 'required|xss_clean');
            $this->form_validation->set_rules('zone', 'Zone', 'required|xss_clean');
            $this->form_validation->set_rules('sex', 'Gender', 'required|xss_clean');
            
            // validation true
            
             if (($this->form_validation->run() == TRUE))
            {
             if ($_FILES && $_FILES['customerfile']['name'] !== "")
             {
                 if (!$this->upload->do_upload('customerfile'))
                 {
                  $data = array('error' => $this->upload->display_errors('customerfile'));
                  $data['query'] = $this->dbmodel->customer();
                  $this->load->view('cme/templets/header');
                  $this->load->view('cme/customer/index', $data);
                  $this->load->view('cme/templets/footer');
                 }
                 else
                 {
                $data = array('upload_data' => $this->upload->data('customerfile'));
                //============= customer detail==========
                $cusimage = $data['upload_data']['file_name'];

                $cid = $this->input->post('cid');
                $fname = $this->input->post('fname');
                $mname = $this->input->post('mname');
                $lname = $this->input->post('lname');
                $address = $this->input->post('address');
                $distric = $this->input->post('distric');
                $vdc = $this->input->post('vdc');
                $tole = $this->input->post('tole');
                $zone = $this->input->post('zone');
                $country = $this->input->post('country');
                $email = $this->input->post('email');
                $gender = $this->input->post('sex');
                 $year = $this->input->post('dobyear');
                $month = $this->input->post('dobmonth');
                $day = $this->input->post('dobday');
                $dob = $year."-".$month."-".$day;
               // $dob = date("y-m-d");
                $conpersonal = $this->input->post('contactpersonal');
                $conhome = $this->input->post('contacthome');
                $title = $this->input->post('title');
                //$userid = $this->input->post('userid');
               // $branchid = $this->input->post('brid');
               
                
                //===========customer id detail ================//
                //
                //=======for ctzn =====//
                          
            if ($_FILES && $_FILES['ctznfile']['name'] !== "")
             {
                 if (!$this->upload->do_upload('ctznfile'))
                 {
                  $data = array('error' => $this->upload->display_errors('ctznfile'));
                  $data['query'] = $this->dbmodel->customer();
                  $this->load->view('cme/templets/header');
                  $this->load->view('cme/customer/index', $data);
                  $this->load->view('cme/templets/footer');
                 }
                 else
                 {
                     $data = array('upload_data' => $this->upload->data('ctznfile'));
               
                $ctznimage = $data['upload_data']['file_name'];
            
                $typectzn = $this->input->post('iek');
                $ctznid = $this->input->post('ida');
                $ctznplace = $this->input->post('ide');
                $year = $this->input->post('idi');
                $month = $this->input->post('idj');
                $day = $this->input->post('idk');
                $ctzndate = $year."-".$month."-".$day;
                $eyear = $this->input->post('idu');
                $emonth = $this->input->post('idv');
                $eday = $this->input->post('idw');
                $ectzndate = $eyear."-".$emonth."-".$eday;
               
                 }
                 }
             else
             {
                 
                $ctznimage = $this->input->post('ieg');
                $typectzn = $this->input->post('iek');
                $ctznid = $this->input->post('ida');
                $ctznplace = $this->input->post('ide');
                $year = $this->input->post('idi');
                $month = $this->input->post('idj');
                $day = $this->input->post('idk');
                $ctzndate = $year."-".$month."-".$day;
                $eyear = $this->input->post('idu');
                $emonth = $this->input->post('idv');
                $eday = $this->input->post('idw');
                $ectzndate = $eyear."-".$emonth."-".$eday;
             }
                
                
                //=====for license =======//
             
              if ($_FILES && $_FILES['lfile']['name'] !== "")
             {
                 if (!$this->upload->do_upload('lfile'))
                 {
                  $data = array('error' => $this->upload->display_errors('lfile'));
                  $data['query'] = $this->dbmodel->customer();
                  $this->load->view('cme/templets/header');
                  $this->load->view('cme/customer/index', $data);
                  $this->load->view('cme/templets/footer');
                 }
                 else
                 {
                     $data = array('upload_data' => $this->upload->data('lfile'));
               
                $limage = $data['upload_data']['file_name'];
            
                $typelicense = $this->input->post('iel');
                $lid = $this->input->post('idb');
                $lplace = $this->input->post('idf');
               $lyear = $this->input->post('idl');
                $lmonth = $this->input->post('idm');
                $lday = $this->input->post('idn');
                $ldate = $lyear."-".$lmonth."-".$lday;
                $elyear = $this->input->post('idx');
                $elmonth = $this->input->post('idy');
                $elday = $this->input->post('idz');
                $eldate = $elyear."-".$elmonth."-".$elday;
                
                 }
                 }
             else
             {
                 
                $limage = $this->input->post('ieh');
                $typelicense = $this->input->post('iel');
               $lid = $this->input->post('idb');
                $lplace = $this->input->post('idf');
               $lyear = $this->input->post('idl');
                $lmonth = $this->input->post('idm');
                $lday = $this->input->post('idn');
                $ldate = $lyear."-".$lmonth."-".$lday;
                $elyear = $this->input->post('idx');
                $elmonth = $this->input->post('idy');
                $elday = $this->input->post('idz');
                $eldate = $elyear."-".$elmonth."-".$elday;
             }            
               
                
                //========for passport ====//
                
                 if ($_FILES && $_FILES['pfile']['name'] !== "")
             {
                 if (!$this->upload->do_upload('pfile'))
                 {
                  $data = array('error' => $this->upload->display_errors('pfile'));
                  $data['query'] = $this->dbmodel->customer();
                  $this->load->view('cme/templets/header');
                  $this->load->view('cme/customer/index', $data);
                  $this->load->view('cme/templets/footer');
                 }
                 else
                 {
                     $data = array('upload_data' => $this->upload->data('pfile'));
               
                $pimage = $data['upload_data']['file_name'];
            
                $typepassport = $this->input->post('iem');
                $pid = $this->input->post('idc');
                $pplace = $this->input->post('idg');
                $pyear = $this->input->post('ido');
                $pmonth = $this->input->post('idp');
                $pday = $this->input->post('idq');
                $pdate = $pyear."-".$pmonth."-".$pday;
                $epyear = $this->input->post('iea');
                $epmonth = $this->input->post('ieb');
                $epday = $this->input->post('iec');
                $epdate = $epyear."-".$epmonth."-".$epday;
                
                 }
                 }
             else
             {
                 
                $pimage = $this->input->post('iei');
                $typepassport = $this->input->post('iem');
                $pid = $this->input->post('idc');
                $pplace = $this->input->post('idg');
                $pyear = $this->input->post('ido');
                $pmonth = $this->input->post('idp');
                $pday = $this->input->post('idq');
                $pdate = $pyear."-".$pmonth."-".$pday;
                $epyear = $this->input->post('iea');
                $epmonth = $this->input->post('ieb');
                $epday = $this->input->post('iec');
                $epdate = $epyear."-".$epmonth."-".$epday;
             }
                      
                
                // =====for others =======//
                
                 if ($_FILES && $_FILES['ofile']['name'] !== "")
             {
                 if (!$this->upload->do_upload('ofile'))
                 {
                  $data = array('error' => $this->upload->display_errors('ofile'));
                  $data['query'] = $this->dbmodel->customer();
                  $this->load->view('cme/templets/header');
                  $this->load->view('cme/customer/index', $data);
                  $this->load->view('cme/templets/footer');
                 }
                 else
                 {
                     $data = array('upload_data' => $this->upload->data('ofile'));
               
                $oimage = $data['upload_data']['file_name'];
            
                $typeother = $this->input->post('ien');
                $oid = $this->input->post('idd');
                $oplace = $this->input->post('idh');
                $oyear = $this->input->post('idr');
                $omonth = $this->input->post('ids');
                $oday = $this->input->post('idt');
                $odate = $oyear."-".$omonth."-".$oday;
                $eoyear = $this->input->post('ied');
                $eomonth = $this->input->post('iee');
                $eoday = $this->input->post('ief');
                $eodate = $eoyear."-".$eomonth."-".$eoday;
               
                 }
                 }
             else
             {
                 
                $oimage = $this->input->post('iej');
                $typeother = $this->input->post('ien');
                $oid = $this->input->post('idd');
                $oplace = $this->input->post('idh');
                $oyear = $this->input->post('idr');
                $omonth = $this->input->post('ids');
                $oday = $this->input->post('idt');
                $odate = $oyear."-".$omonth."-".$oday;
                $eoyear = $this->input->post('ied');
                $eomonth = $this->input->post('iee');
                $eoday = $this->input->post('ief');
                $eodate = $eoyear."-".$eomonth."-".$eoday;
             }
                
                $this->dbmodel->update_details($cid,$fname, $lname, $address, $distric,$vdc,$tole,$zone,$country,$email,$cusimage,$gender,$dob,$conpersonal,$conhome,$title,$mname);
                $this->dbmodel->update_id_ctzn($cid,$ctznid,$ctznplace,$ctzndate,$ctznimage,$ectzndate,$typectzn);
                 $this->dbmodel->update_id_license($cid,$lid,$lplace,$ldate,$limage,$eldate,$typelicense);
                 $this->dbmodel->update_id_passport($cid,$pid,$pplace,$pdate,$pimage,$epdate,$typepassport);
                 $this->dbmodel->update_id_other($cid,$oid,$oplace,$odate,$oimage,$eodate,$typeother);
                
                $this->session->set_flashdata('message', 'One Customer added sucessfully');
                redirect('view/cuslist');

                 }
             }
             else
             {
                 //=====customer detail======//
                $cusimage = $this->input->post('image');
                $cid = $this->input->post('cid');
                $fname = $this->input->post('fname');
                $mname = $this->input->post('mname');
                $lname = $this->input->post('lname');
                $address = $this->input->post('address');
                $distric = $this->input->post('distric');
                $vdc = $this->input->post('vdc');
                $tole = $this->input->post('tole');
                $zone = $this->input->post('zone');
                $country = $this->input->post('country');
                $email = $this->input->post('email');
                $gender = $this->input->post('sex');
                 $year = $this->input->post('dobyear');
                $month = $this->input->post('dobmonth');
                $day = $this->input->post('dobday');
                $dob = $year."-".$month."-".$day;
                
                $conpersonal = $this->input->post('contactpersonal');
                $conhome = $this->input->post('contacthome');
                $title = $this->input->post('title');
                // $userid = $this->input->post('userid');
                //$branchid = $this->input->post('brid');
                
                
                
                 //===========customer id detail ================//
                //
                if ($_FILES && $_FILES['ctznfile']['name'] !== "")
             {
                 if (!$this->upload->do_upload('ctznfile'))
                 {
                  $data = array('error' => $this->upload->display_errors('ctznfile'));
                  $data['query'] = $this->dbmodel->customer();
                  $this->load->view('cme/templets/header');
                  $this->load->view('cme/customer/index', $data);
                  $this->load->view('cme/templets/footer');
                 }
                 else
                 {
                     $data = array('upload_data' => $this->upload->data('ctznfile'));
               
                $ctznimage = $data['upload_data']['file_name'];
            
               $typectzn = $this->input->post('iek');
                $ctznid = $this->input->post('ida');
                $ctznplace = $this->input->post('ide');
                $year = $this->input->post('idi');
                $month = $this->input->post('idj');
                $day = $this->input->post('idk');
                $ctzndate = $year."-".$month."-".$day;
                $eyear = $this->input->post('idu');
                $emonth = $this->input->post('idv');
                $eday = $this->input->post('idw');
                $ectzndate = $eyear."-".$emonth."-".$eday;
                 }
                 }
             else
             {
                 
                $ctznimage = $this->input->post('ieg');
               $typectzn = $this->input->post('iek');
                $ctznid = $this->input->post('ida');
                $ctznplace = $this->input->post('ide');
                $year = $this->input->post('idi');
                $month = $this->input->post('idj');
                $day = $this->input->post('idk');
                $ctzndate = $year."-".$month."-".$day;
                $eyear = $this->input->post('idu');
                $emonth = $this->input->post('idv');
                $eday = $this->input->post('idw');
                $ectzndate = $eyear."-".$emonth."-".$eday;
             }
                
                //=====for license =======//
              if ($_FILES && $_FILES['lfile']['name'] !== "")
             {
                 if (!$this->upload->do_upload('lfile'))
                 {
                  $data = array('error' => $this->upload->display_errors('lfile'));
                  $data['query'] = $this->dbmodel->customer();
                  $this->load->view('cme/templets/header');
                  $this->load->view('cme/customer/index', $data);
                  $this->load->view('cme/templets/footer');
                 }
                 else
                 {
                     $data = array('upload_data' => $this->upload->data('lfile'));
               
                $limage = $data['upload_data']['file_name'];
            
               $typelicense = $this->input->post('iel');
                 $lid = $this->input->post('idb');
                $lplace = $this->input->post('idf');
               $lyear = $this->input->post('idl');
                $lmonth = $this->input->post('idm');
                $lday = $this->input->post('idn');
                $ldate = $lyear."-".$lmonth."-".$lday;
                $elyear = $this->input->post('idx');
                $elmonth = $this->input->post('idy');
                $elday = $this->input->post('idz');
                $eldate = $elyear."-".$elmonth."-".$elday;
                 }
                 }
             else
             {
                 
                $limage = $this->input->post('ieh');
                $typelicense = $this->input->post('iel');
                 $lid = $this->input->post('idb');
                $lplace = $this->input->post('idf');
               $lyear = $this->input->post('idl');
                $lmonth = $this->input->post('idm');
                $lday = $this->input->post('idn');
                $ldate = $lyear."-".$lmonth."-".$lday;
                $elyear = $this->input->post('idx');
                $elmonth = $this->input->post('idy');
                $elday = $this->input->post('idz');
                $eldate = $elyear."-".$elmonth."-".$elday;
             }
                
                //========for passport ====//
                
                 if ($_FILES && $_FILES['pfile']['name'] !== "")
             {
                 if (!$this->upload->do_upload('pfile'))
                 {
                  $data = array('error' => $this->upload->display_errors('pfile'));
                  $data['query'] = $this->dbmodel->customer();
                  $this->load->view('cme/templets/header');
                  $this->load->view('cme/customer/index', $data);
                  $this->load->view('cme/templets/footer');
                 }
                 else
                 {
                     $data = array('upload_data' => $this->upload->data('pfile'));
               
                $pimage = $data['upload_data']['file_name'];
            
               $typepassport = $this->input->post('iem');
                $pid = $this->input->post('idc');
                $pplace = $this->input->post('idg');
                $pyear = $this->input->post('ido');
                $pmonth = $this->input->post('idp');
                $pday = $this->input->post('idq');
                $pdate = $pyear."-".$pmonth."-".$pday;
                $epyear = $this->input->post('iea');
                $epmonth = $this->input->post('ieb');
                $epday = $this->input->post('iec');
                $epdate = $epyear."-".$epmonth."-".$epday;
                 }
                 }
             else
             {
                 
                $pimage = $this->input->post('iei');
                 $typepassport = $this->input->post('iem');
                $pid = $this->input->post('idc');
                $pplace = $this->input->post('idg');
                $pyear = $this->input->post('ido');
                $pmonth = $this->input->post('idp');
                $pday = $this->input->post('idq');
                $pdate = $pyear."-".$pmonth."-".$pday;
                $epyear = $this->input->post('iea');
                $epmonth = $this->input->post('ieb');
                $epday = $this->input->post('iec');
                $epdate = $epyear."-".$epmonth."-".$epday;
             }
                
                // =====for others =======//
                
                 if ($_FILES && $_FILES['ofile']['name'] !== "")
             {
                 if (!$this->upload->do_upload('ofile'))
                 {
                  $data = array('error' => $this->upload->display_errors('ofile'));
                  $data['query'] = $this->dbmodel->customer();
                  $this->load->view('cme/templets/header');
                  $this->load->view('cme/customer/index', $data);
                  $this->load->view('cme/templets/footer');
                 }
                 else
                 {
                     $data = array('upload_data' => $this->upload->data('ofile'));
               
                $oimage = $data['upload_data']['file_name'];
            
                $typeother = $this->input->post('ien');
                $oid = $this->input->post('idd');
                $oplace = $this->input->post('idh');
                $oyear = $this->input->post('idr');
                $omonth = $this->input->post('ids');
                $oday = $this->input->post('idt');
                $odate = $oyear."-".$omonth."-".$oday;
                $eoyear = $this->input->post('ied');
                $eomonth = $this->input->post('iee');
                $eoday = $this->input->post('ief');
                $eodate = $eoyear."-".$eomonth."-".$eoday;
                 }
                 }
             else
             {
                 
                $oimage = $this->input->post('iej');
                 $typeother = $this->input->post('ien');
                $oid = $this->input->post('idd');
                $oplace = $this->input->post('idh');
                $oyear = $this->input->post('idr');
                $omonth = $this->input->post('ids');
                $oday = $this->input->post('idt');
                $odate = $oyear."-".$omonth."-".$oday;
                $eoyear = $this->input->post('ied');
                $eomonth = $this->input->post('iee');
                $eoday = $this->input->post('ief');
                $eodate = $eoyear."-".$eomonth."-".$eoday;
             }
                $this->dbmodel->update_details($cid,$fname, $lname, $address, $distric,$vdc,$tole,$zone,$country,$email,$cusimage,$gender,$dob,$conpersonal,$conhome,$title,$mname);
                $this->dbmodel->update_id_ctzn($cid,$ctznid,$ctznplace,$ctzndate,$ctznimage,$ectzndate,$typectzn);
                 $this->dbmodel->update_id_license($cid,$lid,$lplace,$ldate,$limage,$eldate,$typelicense);
                 $this->dbmodel->update_id_passport($cid,$pid,$pplace,$pdate,$pimage,$epdate,$typepassport);
                 $this->dbmodel->update_id_other($cid,$oid,$oplace,$odate,$oimage,$eodate,$typeother);
               
                $this->session->set_flashdata('message', 'One Customer added sucessfully');
                redirect('view/cuslist');
             }
            }
             else
            {
                 $id = $this->input->post('cid');
                $data['query'] = $this->dbmodel->findcus($id);
                $data['identy'] = $this->dbmodel->get_identity($id);
                 $this->load->view('cme/templets/header');
                $this->load->view('cme/customer/editcus',$data);
                $this->load->view('cme/templets/footer');
            }          
          
        } else {
            redirect('login', 'refresh');
           
        }
        
    }


    
     public function deletecus($id)
    {
         if ($this->session->userdata('logged_in')&& ($this->session->userdata('username')=="ad")) {
        $this->dbmodel->delete_ctzn($id);
        $this->dbmodel->delete_lis($id);
        $this->dbmodel->delete_pas($id);
        $this->dbmodel->delete_other($id);
        $this->dbmodel->delete_customer($id);
        $this->session->set_flashdata('message', 'Data Delete Sucessfully');
        redirect('view/cuslist');
        }
        else {
            redirect('login', 'refresh');
        }
    }
    
    public function addcustomer()
    {
         if ($this->session->userdata('logged_in')) {
           // $data['username'] = Array($this->session->userdata('logged_in'));
            $data['query'] = $this->dbmodel->customer();
            $this->load->view('cme/templets/header');
            $this->load->view('cme/customer/index',$data);
            $this->load->view('cme/templets/footer');
        } else {
            redirect('login', 'refresh');
        }
    }
        
    //========= for find deteil =======//
    
     public function detail() {
             
        if ($this->session->userdata('logged_in')) {
            $data['username'] = Array($this->session->userdata('logged_in'));
            $fcid=  $this->input->post('fcid');
            $data['query'] = $this->dbmodel->customer_detail($fcid);
            $this->load->view('cme/templets/header');
            $this->load->view('cme/detail',$data);
            $this->load->view('cme/templets/footer');
        } else {
            redirect('login', 'refresh');
        }
    }
    
    function logout() {
        $this->session->sess_destroy();
        $this->index();
        redirect('login', 'refresh');
    }

    
    public function print_page()
    {if ($this->session->userdata('logged_in')) {
        $this->load->view('cme/print');
         } else {
            redirect('login', 'refresh');
        }
    }
   
    public function comfirm()
    {
         if ($this->session->userdata('logged_in')) {
             $data['query'] = $this->dbmodel->get_claim();
            
        $this->load->view('cme/comfirm',$data);
        
         } else {
            redirect('login', 'refresh');
        }
    }
   //===============agent =====================//
    public function agent()
    {
         if ($this->session->userdata('logged_in')&& ($this->session->userdata('username')=="ad")) {
             $this->load->view('cme/templets/header');
        $this->load->view('cme/remittance/agent');
        $this->load->view('cme/templets/footer');
         } else {
            redirect('login', 'refresh');
        }
    }
    
    public function addagent()
    {
        
       
         if ($this->session->userdata('logged_in')&& ($this->session->userdata('username')=="ad")) {

            $config['upload_path'] = './agentimg/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '500';
            $config['max_width'] = '1024';
            $config['max_height'] = '768';

            $this->load->library('upload', $config);
           
            $this->load->library(array('form_validation', 'session'));
            
            $this->form_validation->set_rules('cmea_name', 'Name', 'required|xss_clean|max_length[200]');
            $this->form_validation->set_rules('cmea_address', 'Address', 'required|xss_clean');
             $this->form_validation->set_rules('cmea_number', 'Phone Number', 'required|xss_clean');
              $this->form_validation->set_rules('cmea_email', 'Email', 'required|xss_clean'); 
            $this->form_validation->set_rules('cmen_name', 'Nepali Name', 'required|xss_clean');
            $this->form_validation->set_rules('toll_number', 'Nepali Name', 'required|xss_clean');
        
            if (($this->form_validation->run() == FALSE) || (!$this->upload->do_upload('agentfile'))) {
                $data['error']=$this->upload->display_errors('agentfile');
                $this->load->view('cme/templets/header'); 
               $this->load->view('cme/remittance/agent',$data);
               $this->load->view('cme/templets/footer');
              
            } else {
 
                //if valid
                $data = array('upload_data' => $this->upload->data('agentfile'));
                $image = $data['upload_data']['file_name'];
                $name = $this->input->post('cmea_name');
                $nname = $this->input->post('cmen_name');
                $address = $this->input->post('cmea_address');
                $number = $this->input->post('cmea_number');
                $tollnumber = $this->input->post('toll_number');
                $email = $this->input->post('cmea_email');
                $principal = $this->input->post('cmea_principal');
                
                $this->dbmodel->addagent($image,$name,$address,$number,$email,$principal,$nname,$tollnumber);
                $this->session->set_flashdata('message', 'Agent added sucessfully');
                redirect('view/get_agent');
            }
           
        } else
            {

            redirect('login', 'refresh');
        }
    }
    
    
    public function geteditagent($id)
    {
         if ($this->session->userdata('logged_in') && ($this->session->userdata('username')=="ad")) {
        $data['query']= $this->dbmodel->geteditagent($id);
        
         $this->load->view('cme/templets/header');
         $this->load->view('cme/remittance/editagent',$data);
          $this->load->view('cme/templets/footer');
        
         } else {
            redirect('login', 'refresh');
        }
    }
    
    
    //delete page



    public function updatea() {
        if ($this->session->userdata('logged_in')&& ($this->session->userdata('username')=="ad")) {

            $config['upload_path'] = './agentimg/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '500';
            $config['max_width'] = '1024';
            $config['max_height'] = '768';
            $this->load->library('upload', $config);
           
             $this->load->helper('form');
            $this->load->library(array('form_validation', 'session'));
            $id = $this->input->post('id');
            //set validation rules
            $this->load->view('cme/templets/header');
            $this->form_validation->set_rules('cmea_name', 'Remittance Company Name', 'required|xss_clean|max_length[200]');
            
             if (($this->form_validation->run() == TRUE))
            {
             if ($_FILES && $_FILES['agentfile']['name'] !== "")
             {
                 if (!$this->upload->do_upload('agentfile'))
                 {                
                  $data['error'] = $this->upload->display_errors('agentfile');
                  $id = $this->input->post('id');
                  $data['query'] = $this->dbmodel->findagent($id);
                  $this->load->view('cme/remittance/editagent', $data);
                  
                 }
                 else
                 {
                $data = array('upload_data' => $this->upload->data('agentfile'));
                $image = $data['upload_data']['file_name'];

                $name = $this->input->post('cmea_name');
                $nname = $this->input->post('cmen_name');
                $address = $this->input->post('cmea_address');
                $number = $this->input->post('cmea_number');
                $tnumber = $this->input->post('t_number');
                $email = $this->input->post('cmea_email');
                $principal = $this->input->post('cmea_principal');
                $this->dbmodel->updatea($id, $name, $address, $number, $email,$principal,$image,$nname,$tnumber);
                $this->session->set_flashdata('message', 'Remittance Company Modified Sucessfully');
               redirect('view/get_agent');

                 }
             }
             else
             {

                $image = $this->input->post('image');
                $name = $this->input->post('cmea_name');
                $nname = $this->input->post('cmen_name');
               $address = $this->input->post('cmea_address');
                $number = $this->input->post('cmea_number');
                 $tnumber = $this->input->post('t_number');
                $email = $this->input->post('cmea_email');
                $principal = $this->input->post('cmea_principal');
                $this->dbmodel->updatea($id, $name, $address, $number, $email,$principal,$image,$nname,$tnumber);
                $this->session->set_flashdata('message', 'Remittance Company Modified Sucessfully');
               redirect('view/get_agent');

             }
            }

            else
            {
                $id = $this->input->post('id');
                $data['query'] = $this->dbmodel->findagent($id);
                $this->load->view('cme/remittance/editagent',$data);
            }

            $this->load->view('cme/templets/footer');
         } else {
            redirect('login', 'refresh');
        }
        
    }

    public function deleteagent($id)
    {
         if ($this->session->userdata('logged_in')&& ($this->session->userdata('username')=="ad")) {
        $this->dbmodel->delete_agent($id);
        $this->session->set_flashdata('message', 'Data Delete Sucessfully');
        redirect('view/get_agent');
        }
        else {
            redirect('login', 'refresh');
        }
    }

    

    public function tranzaction()
    {
         if ($this->session->userdata('logged_in')) {
            $this->load->view('cme/templets/header');  
         $data['query']= $this->dbmodel->get_agent();
          
        $this->load->view('cme/tranzaction',$data);
        $this->load->view('cme/templets/footer');
         } else {
            redirect('login', 'refresh');
        }
    }
        
        public function get_tran()
        {
             if ($this->session->userdata('logged_in')) {
          $this->load->view('cme/templets/header');
          
                 $data['query']= $this->dbmodel->get_agent();
                     $fcid = $this->input->post('id');
         $data['customer'] = $this->dbmodel->customer_detail($fcid);
        
        $this->load->view('cme/get_tran',$data);
        $this->load->view('cme/templets/footer');
         } else {
            redirect('login', 'refresh');
        }
            
        
        }
        
        public function get_agent()
        {
             if ($this->session->userdata('logged_in')&& ($this->session->userdata('username')=="ad")) {
         $data['query']= $this->dbmodel->get_agent();
         $this->load->view('cme/templets/header');  
        $this->load->view('cme/remittance/agentlist',$data);
        $this->load->view('cme/templets/footer');
         } else {
            redirect('login', 'refresh');
        }
        }
        
         public function get_useragent()
        {
             if ($this->session->userdata('logged_in')) {
         $data['query']= $this->dbmodel->get_agent();
         $this->load->view('cme/templets/header');  
        $this->load->view('cme/remittance/foruser',$data);
        $this->load->view('cme/templets/footer');
         } else {
            redirect('login', 'refresh');
        }
        }

        


        public function userlist()
        {
            
         if ($this->session->userdata('logged_in') && ($this->session->userdata('username')=="ad")) {
            
             $data['userlist'] = $this->dbmodel->userlist();
              $this->load->view('cme/templets/header');  
        $this->load->view('cme/user/userlist',$data);
        $this->load->view('cme/templets/footer');
             
         } else {
            redirect('login', 'refresh');
        } 
            
        }

                public function user() {
         
         if ($this->session->userdata('logged_in') && ($this->session->userdata('username')=="ad")) {
             $this->load->view('cme/templets/header');
             $data['branch']=  $this->dbmodel->branch();
          $this->load->view('cme/user/user',$data);
          $this->load->view('cme/templets/footer');
         } else {
            redirect('login', 'refresh');
        }  
    }
    
    public function adduser()
    {
         if ($this->session->userdata('logged_in')&& ($this->session->userdata('username')=="ad")) {

                       
            $this->load->library(array('form_validation', 'session'));
            
            $this->form_validation->set_rules('uname', 'User Name', 'required|xss_clean|max_length[200]');
            $this->form_validation->set_rules('pass', 'Password', 'required|xss_clean');
             $this->form_validation->set_rules('role', 'Role', 'required|xss_clean');
              $this->form_validation->set_rules('branch', 'Branch', 'required|xss_clean');
                         
        
            if (($this->form_validation->run() == FALSE)) {
               
                $this->load->view('cme/templets/header'); 
               $this->load->view('cme/user/user');
               $this->load->view('cme/templets/footer');
              
            } else {
 
                //if valid
                $user = $this->input->post('uname');
                $pass = $this->input->post('pass');
                $role = $this->input->post('role');
                $branch = $this->input->post('branch');
                                
                $this->dbmodel->adduser($user,$pass,$role,$branch);
                $this->session->set_flashdata('message', 'User added sucessfully');
                redirect('view/userlist');
            }
           
        } else
            {

            redirect('login', 'refresh');
        }
        
    }
    
     public function updateuser() {
        if ($this->session->userdata('logged_in')&& ($this->session->userdata('username')=="ad")) {

                      
             $this->load->helper('form');
            $this->load->library(array('form_validation', 'session'));
            $id = $this->input->post('id');
            //set validation rules
           
            $this->form_validation->set_rules('uname', 'User Name', 'required|xss_clean|max_length[200]');
            $this->form_validation->set_rules('pass', 'Password', 'required|xss_clean');
             $this->form_validation->set_rules('role', 'Role', 'required|xss_clean');
              $this->form_validation->set_rules('branch', 'Branch', 'required|xss_clean');
            
             if (($this->form_validation->run() == FALSE)) {
               $id = $this->input->post('id');
                  $data['query'] = $this->dbmodel->finduser($id);
                  $data['branch']=  $this->dbmodel->branch();
                $this->load->view('cme/templets/header'); 
               $this->load->view('cme/user/edit',$data);
               $this->load->view('cme/templets/footer');
              
            } else {
 
                //if valid
                $user = $this->input->post('uname');
                $pass = $this->input->post('pass');
                $role = $this->input->post('role');
                $branch = $this->input->post('branch');
               
                
                $this->dbmodel->update_user($id,$user,$pass,$role,$branch);
                $this->session->set_flashdata('message', 'Update sucessfully');
                redirect('view/userlist');
            }
           
        } else
            {

            redirect('login', 'refresh');
        }
        
    }
    
     public function deleteuser($id)
    {
         if ($this->session->userdata('logged_in')&& ($this->session->userdata('username')=="ad")) {
        $this->dbmodel->delete_user($id);
        $this->session->set_flashdata('message', 'Data Delete Sucessfully');
        redirect('view/userlist');
        }
        else {
            redirect('login', 'refresh');
        }
    }

        public function getedituser($id)
    {
         if ($this->session->userdata('logged_in') && ($this->session->userdata('username')=="ad")) {
        $data['query']= $this->dbmodel->getedituser($id);
        $data['branch']=  $this->dbmodel->branch();
         $this->load->view('cme/templets/header');
         $this->load->view('cme/user/edit',$data);
          $this->load->view('cme/templets/footer');
        
         } else {
            redirect('login', 'refresh');
        }
    }

    public function addtranzaction()
    {
        if ($this->session->userdata('logged_in')) {

                       
            $this->load->library(array('form_validation', 'session'));
            
            $this->form_validation->set_rules('ref_number', 'Refrence Number', 'required|xss_clean|max_length[200]');
           $this->form_validation->set_rules('s_name', 'Sender Name', 'required|xss_clean');
             $this->form_validation->set_rules('s_amount', 'Amount', 'required|xss_clean');
             $this->form_validation->set_rules('r_name', 'Recider Name', 'required|xss_clean');
              $this->form_validation->set_rules('r_add', 'Reciver Address', 'required|xss_clean');
             $this->form_validation->set_rules('r_number', 'Contact Number', 'required|xss_clean');
             $this->form_validation->set_rules('identity', 'Identity', 'required|xss_clean');
             $this->form_validation->set_rules('country', 'Country', 'required|xss_clean');
             $this->form_validation->set_rules('r_idnumber', 'ID Number', 'required|xss_clean');
              $this->form_validation->set_rules('r_issueplace', 'Issue Place', 'required|xss_clean');
             //$this->form_validation->set_rules('r_issuedate', 'Issue Date', 'required|xss_clean');
             $country = $this->input->post('country');
             $data['query']= $this->dbmodel->get_agent();
              
              
                  
        
            if (($this->form_validation->run() == FALSE) ) {
               
                $this->load->view('cme/templets/header'); 
               $this->load->view('cme/tranzaction',$data);
               $this->load->view('cme/templets/footer');
              
            }
           else {
 
                //if valid
                $id = $this->input->post('uid');
                $rnumber = $this->input->post('ref_number');
                $compname = $this->input->post('a_name');
                $auth = $this->input->post('auth_code');
                $sname = $this->input->post('s_name');
                $country = $this->input->post('country');
                $amount = $this->input->post('s_amount');
                $income = $this->input->post('income');
                $rname = $this->input->post('r_name');
                $raddress = $this->input->post('r_add');
                $contact = $this->input->post('r_number');
                $identity = $this->input->post('identity');
                $idnumber = $this->input->post('r_idnumber');
                $issueplace = $this->input->post('r_issueplace');
                $ryear = $this->input->post('r_year');
                $rmonth = $this->input->post('r_month');
                $rday = $this->input->post('r_day');
                $issuedate = $ryear."-".$rmonth."-".$rday;
               // $issuedate = date('Y-m-d',$issuedate); 
                $eyear = $this->input->post('e_year');
                $emonth = $this->input->post('e_month');
                $eday = $this->input->post('e_day');
                $expiredate = $eyear."-".$emonth."-".$eday;
                //$expiredate = date('Y-m-d',$expiredate); 
                //$date1 = $this->input->post('date');
                
                $date = date('y-m-d h:m:s');
              // die($date);
               
                $source = $this->input->post('income');
                $relation = $this->input->post('relation');
                $title = $this->input->post('title');
                $rtitle = $this->input->post('rtitle');
                $branch = $this->input->post('branch');
                $city = $this->input->post('r_city');
                
                
                $this->dbmodel->addtranzaction($rnumber,$compname,$auth,$sname,$country,$amount,$income,$rname,$raddress,$contact,$identity,$idnumber,$issueplace,$issuedate,$issuedate,$expiredate,$id,$date,$source,$relation,$title,$rtitle,$branch,$city);
                $this->session->set_flashdata('message', 'Tranzaction added sucessfully');
                redirect('view/comfirm');
            }
           
        } else
            {

            redirect('login', 'refresh');
        }
        
    }
            
    
    
    public function addtranzaction_get()
    {
        if ($this->session->userdata('logged_in')) {
                       
            $this->load->library(array('form_validation', 'session'));
            
            $this->form_validation->set_rules('ref_number', 'Refrence Number', 'required|xss_clean|max_length[200]');
           $this->form_validation->set_rules('s_name', 'Sender Name', 'required|xss_clean');
             $this->form_validation->set_rules('s_amount', 'Amount', 'required|xss_clean');
             $this->form_validation->set_rules('r_name', 'Recider Name', 'required|xss_clean');
              $this->form_validation->set_rules('r_add', 'Reciver Address', 'required|xss_clean');
             $this->form_validation->set_rules('r_number', 'Contact Number', 'required|xss_clean');
             $this->form_validation->set_rules('identity', 'Identity', 'required|xss_clean');
             $this->form_validation->set_rules('country', 'Country', 'required|xss_clean');
             $this->form_validation->set_rules('r_idnumber', 'ID Number', 'required|xss_clean');
              $this->form_validation->set_rules('r_issueplace', 'Issue Place', 'required|xss_clean');
            // $this->form_validation->set_rules('r_issuedate', 'Issue Date', 'required|xss_clean');
             $country = $this->input->post('country');
              $data['query']= $this->dbmodel->get_agent();    
        
            if (($this->form_validation->run() == FALSE) ) {
               
                $fcid = $this->input->post('uid');
         $data['customer'] = $this->dbmodel->customer_detail($fcid); 
         $this->load->view('cme/templets/header');
               $this->load->view('cme/get_tran',$data);
               $this->load->view('cme/templets/footer');
              
            }
           else {
 
                //if valid
                $id = $this->input->post('uid');
                $rnumber = $this->input->post('ref_number');
                $compname = $this->input->post('a_name');
                $auth = $this->input->post('auth_code');
                $sname = $this->input->post('s_name');
                $country = $this->input->post('country');
                $amount = $this->input->post('s_amount');
                $income = $this->input->post('income');
                $rname = $this->input->post('r_name');
                $raddress = $this->input->post('r_add');
                $contact = $this->input->post('r_number');
                $identity = $this->input->post('identity');
                $idnumber = $this->input->post('r_idnumber');
                $issueplace = $this->input->post('r_issueplace');
                 $ryear = $this->input->post('r_year');
                $rmonth = $this->input->post('r_month');
                $rday = $this->input->post('r_day');
                $issuedate = $ryear."-".$rmonth."-".$rday;
               // $issuedate = date('Y-m-d',$issuedate); 
                $eyear = $this->input->post('e_year');
                $emonth = $this->input->post('e_month');
                $eday = $this->input->post('e_day');
                $expiredate = $eyear."-".$emonth."-".$eday;
                //$expiredate = date('Y-m-d',$expiredate); 
                //$date = $this->input->post('date');
                $date = date('Y-m-d h:m:s'); 
                $source = $this->input->post('income');
                 $relation = $this->input->post('relation');
                 $title= $this->input->post('title');
                 $rtitle = $this->input->post('rtitle');
                 $branch = $this->input->post('branch');
                 $city = $this->input->post('r_city');
                
                
                $this->dbmodel->addtranzaction($rnumber,$compname,$auth,$sname,$country,$amount,$income,$rname,$raddress,$contact,$identity,$idnumber,$issueplace,$issuedate,$issuedate,$expiredate,$id,$date,$source,$relation,$title,$rtitle,$branch,$city);
                $this->session->set_flashdata('message', 'Tranzaction added sucessfully');
                redirect('view/comfirm');
            }
           
        } else
            {

            redirect('login', 'refresh');
        }
        
    }
    
    public function cuslist()
    {
         if ($this->session->userdata('logged_in') && ($this->session->userdata('username')=="ad")) {
            
             $data['cuslist'] = $this->dbmodel->cuslist();
              $this->load->view('cme/templets/header');  
        $this->load->view('cme/customer/cuslist',$data);
        $this->load->view('cme/templets/footer');
             
         } else {
            redirect('login', 'refresh');
        }
        
    }
    
    
     public function branchlist()
    {
         if ($this->session->userdata('logged_in') && ($this->session->userdata('username')=="ad")) {
            
             $data['blist'] = $this->dbmodel->branchlist();
              $this->load->view('cme/templets/header');  
        $this->load->view('cme/branch/branchlist',$data);
        $this->load->view('cme/templets/footer');
             
         } else {
            redirect('login', 'refresh');
        }
      }
      
      public function branch()
      {
           if ($this->session->userdata('logged_in') && ($this->session->userdata('username')=="ad")) {
             $this->load->view('cme/templets/header');
            // $data['branch']=  $this->dbmodel->branch();
          $this->load->view('cme/branch/branch');
          $this->load->view('cme/templets/footer');
         } else {
            redirect('login', 'refresh');
        }  
          
      }
      
      public function addbranch()
      {
           if ($this->session->userdata('logged_in')&& ($this->session->userdata('username')=="ad")) {

                       
            $this->load->library(array('form_validation', 'session'));
            
            $this->form_validation->set_rules('bname', 'Branch Name', 'required|xss_clean|max_length[200]');
            $this->form_validation->set_rules('bperson', 'Branch Person', 'required|xss_clean');
             $this->form_validation->set_rules('bphnumber', 'Phone Number', 'required|xss_clean');
              $this->form_validation->set_rules('bmbnumber', 'Mobile Number', 'required|xss_clean');
              $this->form_validation->set_rules('baddress', 'Address', 'required|xss_clean');
            
        
            if (($this->form_validation->run() == FALSE)) {
               
                $this->load->view('cme/templets/header'); 
               $this->load->view('cme/branch/branch');
               $this->load->view('cme/templets/footer');
              
            } else {
 
                //if valid
                $bname = $this->input->post('bname');
                $bperson = $this->input->post('bperson');
                $bphnumber = $this->input->post('bphnumber');
                $bmbnumber = $this->input->post('bmbnumber');
                $address = $this->input->post('baddress');
                
                $this->dbmodel->addbranch($bname,$bperson,$bphnumber,$bmbnumber,$address);
                $this->session->set_flashdata('message', 'Branch added sucessfully');
                redirect('view/branchlist');
            }
           
        } else
            {

            redirect('login', 'refresh');
        }
    }  
    
    public function editbranch($id)
    {
         if ($this->session->userdata('logged_in') && ($this->session->userdata('username')=="ad")) {
        $data['query']= $this->dbmodel->get_edit_branch($id);
        //$data['branch']=  $this->dbmodel->branch();
         $this->load->view('cme/templets/header');
         $this->load->view('cme/branch/editbranch',$data);
          $this->load->view('cme/templets/footer');
        
         } else {
            redirect('login', 'refresh');
        }
    } 
    
     public function updatebranch() {
        if ($this->session->userdata('logged_in')&& ($this->session->userdata('username')=="ad")) {

                      
             $this->load->helper('form');
            $this->load->library(array('form_validation', 'session'));
            $id = $this->input->post('id');
            //set validation rules
           
            $this->form_validation->set_rules('bname', 'Branch Name', 'required|xss_clean|max_length[200]');
            $this->form_validation->set_rules('bperson', 'Branch Person', 'required|xss_clean');
             $this->form_validation->set_rules('bphnumber', 'Phone Number', 'required|xss_clean');
              $this->form_validation->set_rules('bmbnumber', 'Mobile Number', 'required|xss_clean');
              $this->form_validation->set_rules('baddress', 'Address', 'required|xss_clean');
            
             if (($this->form_validation->run() == FALSE)) {
               $id = $this->input->post('id');
                  $data['query'] = $this->dbmodel->findbranch($id);
                $this->load->view('cme/templets/header'); 
               $this->load->view('cme/branch/editbranch',$data);
               $this->load->view('cme/templets/footer');
              
            } else {
 
                //if valid
                $bname = $this->input->post('bname');
                $bperson = $this->input->post('bperson');
                $bphnumber = $this->input->post('bphnumber');
                $bmbnumber = $this->input->post('bmbnumber');
                $address = $this->input->post('baddress');
                
                $this->dbmodel->update_branch($id,$bname,$bperson,$bphnumber,$bmbnumber,$address);
                $this->session->set_flashdata('message', 'Update sucessfully');
                redirect('view/branchlist');
            }
           
        } else
            {

            redirect('login', 'refresh');
        }
        
    }
    
     public function deletebranch($id)
    {
         if ($this->session->userdata('logged_in')&& ($this->session->userdata('username')=="ad")) {
        $this->dbmodel->delete_branch($id);
        $this->session->set_flashdata('message', 'Data Delete Sucessfully');
        redirect('view/branchlist');
        }
        else {
            redirect('login', 'refresh');
        }
    }
     
}