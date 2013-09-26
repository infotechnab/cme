<?php
class Dbmodel extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    // This model is to user verified 
    function validate() {
        $this->db->select('role');
        $this->db->where('uname', $this->input->post('username'));
        $this->db->where('upass', md5($this->input->post('password')));
        $query = $this->db->get('user');
        
        

        if ($query->num_rows == 1) {
            return true;
        } else {
            return FALSE;
        }
    }
    
    public function branch(){
         $branch = $this->db->get('branch');
        return $branch->result();
    }

        public function get_branch($id)
    {
         
         $this->db->where('id', $id); 
          $branch = $this->db->get('branch');
        return $branch->result();
    }

        public function role()
    {
         $this->db->select('role,u_id,id,uname');
        $this->db->where('uname', $this->input->post('username'));
        $this->db->where('upass', md5($this->input->post('password')));
        $query = $this->db->get('user');
        return $query->result();
        
    }

    // this is another method to get user verified 
    function login($username, $password) {
        $this->db->select('u_id, uname, pass,role');
        $this->db->from('user');
        $this->db->where('uname = ' . "'" . $username . "'");
        $this->db->where('pass = ' . "'" . MD5($password) . "'");
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
    
    public function get_identity($id)
    {
        $this->db->where('c_id ',$id);
        $detail = $this->db->get('identity_detail');
        return $detail->result();
    }

        public function customer()
    {       
        $this->db->order_by('c_id','DESC');
        $query = $this->db->get('customer_info',1);
        return $query->result();
        
    }
    public function get_custmrdetail()
    {
        $query = $this->db->get('customer_info');
        return $query->result();
    }


    public function customer_detail($fcid)
    {
        
         $this->db->where('cus_id = '."'".$fcid."'");
        $query = $this->db->get('customer_info');
        return $query->result();
        
    }
    
    public function cus_detail_tran($id){
         $this->db->where('c_id = '."'".$id."'");
        $query = $this->db->get('customer_info');
        return $query->result();
    }

    public function get_edit_cus($id)
    {
        $this->db->where('c_id',$id);
        $query = $this->db->get('customer_info');
        return $query->result();
    }
    
     public function get_iddetail($id)
    {
        $this->db->where('c_id',$id);
        $identy = $this->db->get('identity_detail');
        return $identy->result();
    }
    public function delete_ctzn($id){
        $this->db->where('c_id',$id);
        $this->db->delete('identity_detail');
    }
    
     public function delete_lis($id){
        $this->db->where('c_id',$id);
        $this->db->delete('identity_detail');
    }
    
     public function delete_pas($id){
        $this->db->where('c_id',$id);
        $this->db->delete('identity_detail');
    }
    
     public function delete_other($id){
        $this->db->where('c_id',$id);
        $this->db->delete('identity_detail');
    }

        public function delete_customer($id)
    {
         $this->db->delete('customer_info', array('c_id' => $id));
    }
    
     public function findcus($id)
    {
       
        $this->db->where('c_id = ' . "'" . $id . "'");
        $query = $this->db->get('customer_info');
        return $query->result();
    }
    
    public function add_details($cid,$fname, $lname, $address, $distric,$vdc,$tole,$zone,$country,$email,$cusimage,$gender,$dob,$conpersonal,$conhome,$title,$userid,$branchid,$mname,$cusid,$fullid,$ward,$city)
    {
      
        $data=array(
            'c_id'=>$cid,
            'cus_id'=>$cusid,
            'full_id'=>$fullid,
            'fname'=>$fname,
            'mname'=>$mname,
            'lname'=>$lname,
            'address'=>$address,
            'distric'=>$distric,
            'vdc'=>$vdc,
            'tole'=>$tole,
            'ward'=>$ward,
            'city'=>$city,
            'zone'=>$zone,
            'country'=>$country,
            'email'=>$email,
            'image'=>$cusimage,
                'gender'=>$gender,
            'dob'=>$dob,
            'conpersonal'=>$conpersonal,
            'conhome'=>$conhome,
            'title'=>$title,
            'u_id'=>$userid,
            'id'=>$branchid);
        $this->db->insert('customer_info', $data);
        
    }
    
    public function add_id_ctzn($cid,$typectzn,$ctznid,$ctznplace,$ctzndate,$image)
    {
    
        $data=array(            
            'c_id'=>$cid,
            'type'=>$typectzn,
            'id_number'=>$ctznid,
            'issue_place'=>$ctznplace,
            'issue_date'=>$ctzndate,
            //'expire_date'=>$ectzndate,
                'image' =>$image );
         $this->db->insert('identity_detail', $data);
    }
    
    public function add_id_license($cid,$typelicense,$lid,$lplace,$ldate,$image,$eldate)
    {
         $data=array(
            'c_id'=>$cid,
            'type'=>$typelicense,
            'id_number'=>$lid,
            'issue_place'=>$lplace,
            'issue_date'=>$ldate,
              'expire_date'=>$eldate,
                 'image'=>$image );
          $this->db->insert('identity_detail', $data);
    }
    
    public function add_id_passport($cid,$typepassport,$pid,$pplace,$pdate,$image,$epdate)
    {
        $data=array(
            'c_id'=>$cid,
            'type'=>$typepassport,
            'id_number'=>$pid,
            'issue_place'=>$pplace,
            'issue_date'=>$pdate,
           'expire_date'=>$epdate,
                'image'=>$image);
        $this->db->insert('identity_detail', $data);
    }
    
    public function add_id_other($cid,$typeother,$oid,$oplace,$odate,$image,$eodate)
    {
        $data=array(
            'c_id'=>$cid,
            'type'=>$typeother,
            'id_number'=>$oid,
            'issue_place'=>$oplace,
            'issue_date'=>$odate,
            'expire_date'=>$eodate,
                'image'=>$image);
        $this->db->insert('identity_detail', $data);
    }
    
    public function update_details($cid,$fname, $lname, $address, $distric,$vdc,$tole,$zone,$country,$email,$cusimage,$gender,$dob,$conpersonal,$conhome,$title,$mname)
    {
      
        $data=array(
            
            'fname'=>$fname,
            'mname'=>$mname,
            'lname'=>$lname,
            'address'=>$address,
            'distric'=>$distric,
            'vdc'=>$vdc,
            'tole'=>$tole,
            'zone'=>$zone,
            'country'=>$country,
            'email'=>$email,
            'image'=>$cusimage,
                'gender'=>$gender,
            'dob'=>$dob,
            'conpersonal'=>$conpersonal,
            'conhome'=>$conhome,
            'title'=>$title,
            );
            $this->db->where('c_id',$cid);
        $this->db->update('customer_info', $data);
        
    }
    
    
     public function update_id_ctzn($cid,$ctznid,$ctznplace,$ctzndate,$image,$typectzn)
    {
       
        $data=array(            
                       
            'id_number'=>$ctznid,
            'issue_place'=>$ctznplace,
            'issue_date'=>$ctzndate,
            //'expire_date'=>$ectzndate,
                'image' =>$image );
        $this->db->where('c_id',$cid);
        $this->db->where('type',$typectzn);
         $this->db->update('identity_detail', $data);
    }
    
    
    public function update_id_license($cid,$lid,$lplace,$ldate,$image,$eldate,$typelicense)
    {
         $data=array(
                       
            'id_number'=>$lid,
            'issue_place'=>$lplace,
            'issue_date'=>$ldate,
              'expire_date'=>$eldate,
                 'image'=>$image );
          $this->db->where('c_id',$cid);
          $this->db->where('type',$typelicense);
          $this->db->update('identity_detail', $data);
    }
    
     public function update_id_passport($cid,$pid,$pplace,$pdate,$image,$epdate,$typepassport)
    {
        $data=array(
           
            'id_number'=>$pid,
            'issue_place'=>$pplace,
            'issue_date'=>$pdate,
           'expire_date'=>$epdate,
                'image'=>$image);
        $this->db->where('c_id',$cid );
        $this->db->where('type',$typepassport);
        $this->db->update('identity_detail', $data);
    }
    
    
     public function update_id_other($cid,$oid,$oplace,$odate,$image,$eodate,$typeother)
    {
      
        $data=array(
           
            'id_number'=>$oid,
            'issue_place'=>$oplace,
            'issue_date'=>$odate,
            'expire_date'=>$eodate,
                'image'=>$image);
        $this->db->where('c_id',$cid );
        $this->db->where('type',$typeother);
        $this->db->update('identity_detail', $data);
    }
    
    
    
    public function date()
    {
        $this->db->select('issue_date');
        $query = $this->db->get('identity_detail');
        return $query->result();
    }
    
    public function addagent($image,$name,$address,$number,$email,$principal,$nname,$tollnumber)
    {
        $data = array(
            'image'=>$image,
            'a_name'=>$name,
            'n_name'=>$nname,
            'a_address'=>$address,
            'a_number'=>$number,
            't_number'=>$tollnumber,
            'a_email'=>$email,
            'a_principal'=>$principal
        );
         $this->db->insert('cme_agent', $data);
        
    }
    public function get_agentimg($agent)
    {
        $this->db->select('image,n_name');
        $this->db->where('a_name',$agent);
         $agentimg = $this->db->get('cme_agent');
         return $agentimg->result();
        
    }
      public function record_count_agent() {
        return $this->db->count_all('cme_agent');
    }

        public function get_agentlist($limit,$start)
    {
             $this->db->limit($limit, $start); 
        $query = $this->db->get('cme_agent');
        return $query->result();
    }
    
     public function get_agent()
    {
              
        $query = $this->db->get('cme_agent');
        return $query->result();
    }
    
    public function addtranzaction($rnumber,$compname,$auth,$sname,$country,$amount,$income,$rname,$raddress,$contact,$identity,$idnumber,$issueplace,$issuedate,$issuedate,$expiredate,$id,$date,$source,$relation,$title,$rtitle,$branch,$city,$cid)
    {
        
        
        $data = array(
            'ref_number'=>$rnumber,
            'agent'=>$compname,
            'auth_code'=>$auth,
            's_name'=>$sname,
            'country'=>$country,
             'amount'=>$amount,
            'u_id'=>$id,
            'cid'=>$cid,
            //'a_name'=>$income,
            'r_name'=>$rname,
            'address'=>$raddress,
            'contact'=>$contact,
             'd_type'=>$identity,
            'd_number'=>$idnumber,
            'date'=>$date,
            'd_place'=>$issueplace,
            'd_date'=>$issuedate,
            'd_expire'=>$expiredate,
            'source'=>$source,
            'relation'=>$relation,
            's_title'=>$title,
            'r_title'=>$rtitle,
            'branch'=>$branch,
            'city' => $city,
           // 'total_amount'=>$totalAmount
        );
         $this->db->insert('cme_tranzaction', $data);
        
        
    }
    
    public function get_claim()
    {
         $this->db->order_by('t_id','DESC');
        $query = $this->db->get('cme_tranzaction',1);
        return $query->result();
    }
    
    public function get_user()
    {
        $user = $this->db->get('user');
        return $user->result();
    }

        public function record_count_user() {
        return $this->db->count_all('user');
    }
    
    public function userlist($limit,$start,$id)
    {
       // die($id);
        $this->db->limit($limit, $start);
        $this->db->select('u_id,uname,role,id');        
        $this->db->where('u_id <>', $id);        
        $userlist = $this->db->get('user');       
        return $userlist->result();
    }
    
     public function record_count_tran() {
        return $this->db->count_all('cme_tranzaction');
    }
    
    
     public function tranlist($limit,$start)
    {
        $this->db->limit($limit, $start);
        $tranlist = $this->db->get('cme_tranzaction');
        return $tranlist->result();
    }
    
     public function tranlistAmount()
    {
        //$this->db->order_by('t_id','DESC');
       // $this->db->limit(1);
       $this->db->select_sum('amount');
        $tran = $this->db->get('cme_tranzaction');
        return $tran->result();
    }
    
     public function sendlistAmount()
    {
        //$this->db->order_by('t_id','DESC');
       // $this->db->limit(1);
       $this->db->select_sum('amount');
        $tran = $this->db->get('send_transaction');
        return $tran->result();
    }
    
    public function sendlistCAmount()
    {
        //$this->db->order_by('t_id','DESC');
       // $this->db->limit(1);
       $this->db->select_sum('c_amount');
        $tran = $this->db->get('send_transaction');
        return $tran->result();
    }
    
     public function usertranlist($limit,$start,$id)
    {
        $this->db->limit($limit, $start);
        $this->db->where('u_id',$id);
        $tranlist = $this->db->get('cme_tranzaction');
        return $tranlist->result();
    }
    
    public function usertranlistall($id)
    {
        
        $this->db->where('u_id',$id);
        $tranlist = $this->db->get('cme_tranzaction');
        return $tranlist->result();
    }
    
   
     public function geteditagent($id)
    {
        $this->db->where('id',$id);
        $query = $this->db->get('cme_agent');
        return $query->result();
    }
    
     public function getedituser($id)
    {
        $this->db->where('u_id',$id);
        $query = $this->db->get('user');
        return $query->result();
    }
    
    
    public function findagent($id)
    {
       
        $this->db->where('id = ' . "'" . $id . "'");
        $query = $this->db->get('cme_agent');
        return $query->result();
    }
    
    public function updatea($id, $name, $address, $number, $email,$principal,$image,$nname,$tnumber)
    {
        
         $this->load->database();
                   $data = array(
            'a_name' => $name,
            'n_name' =>$nname,
            'a_address' => $address,
            'a_number'=> $number,
            't_number'=>$tnumber,
            'a_email' => $email,
            'a_principal'=>$principal,
            'image'=>$image);
        
        
        $this->db->where('id', $id);
        $this->db->update('cme_agent', $data);
        
    }
    
    public function delete_agent($id)
    {
         $this->db->delete('cme_agent', array('id' => $id));
    }
    public function record_count_cuslist() {
        return $this->db->count_all('customer_info');
    }
    
   
    
    

    public function cuslist($limit, $start)
    {
        $this->db->limit($limit, $start); 
        $cuslist = $this->db->get('customer_info');
        return $cuslist->result();
    }
    
     public function record_count_branch() {
        return $this->db->count_all('branch');
    }
    
    
    public function branchlist($limit,$start)
    {
        $this->db->limit($limit, $start); 
        $blist = $this->db->get('branch');
        return $blist->result();
    }
    
   
    
    public function addbranch($bname,$bperson,$bphnumber,$bmbnumber,$address,$btitle,$bcode)
    {
         $this->load->database();
                   $data = array(
            'b_name' => $bname,
            'b_title'=>$btitle,
            'b_code'=>$bcode,
            'person' => $bperson,
            'ph_number'=> $bphnumber,
            'mb_number' => $bmbnumber,
            'address'=>$address);
        
        $this->db->insert('branch', $data);
    }
     public function get_edit_branch($id)
    {
        $this->db->where('id',$id);
        $query = $this->db->get('branch');
        return $query->result();
    }
    
    public function update_branch($id,$bname,$bperson,$bphnumber,$bmbnumber,$address,$btitle,$bcode)
    {
         $this->load->database();
                   $data = array(
            'b_name' => $bname,
            'b_title'=>$btitle,
            'b_code'=>$bcode,
            'person' => $bperson,
            'ph_number'=> $bphnumber,
            'mb_number' => $bmbnumber,
            'address'=>$address,
            );
        
        
        $this->db->where('id', $id);
        $this->db->update('branch', $data);
        
    }
    
    public function findbranch($id)
    {
       
        $this->db->where('id = ' . "'" . $id . "'");
        $query = $this->db->get('branch');
        return $query->result();
    }
    
    public function delete_branch($id)
    {
         $this->db->delete('branch', array('id' => $id));
    }
    
    function check_data($user)
 {
  $this->db->where('uname',$user);
  $query = $this->db->get('user');
  return $query->num_rows();
 } 
    
     public function adduser($user,$pass,$role,$branch,$fullname,$address,$phone,$email)
    {
         $this->load->database();
                   $data = array(
            'uname' => $user,
             'full_name'=>$fullname,
              'address'=>$address,
               'phone_number'=>$phone,
                'email'=>$email,       
            'upass' => md5($pass),
            'role'=> $role,
            'id' => $branch);
        
        $this->db->insert('user', $data);
    }
    
     public function finduser($id)
    {
       
        $this->db->where('u_id = ' . "'" . $id . "'");
        $query = $this->db->get('user');
        return $query->result();
    }
    
     public function update_user($id,$user,$role,$branch,$fullname,$address,$phone,$email,$pass)
    {
       
        $this->load->database();
        
        if(isset($pass) && $pass ==!"")
        {
                   $data = array(
            'uname' => $user,
             'full_name'=>$fullname,
                       'address'=>$address,
                       'phone_number'=>$phone,
                       'email'=>$email,
            'upass' => md5($pass),
            'role'=> $role,
            'id' => $branch);
        }
        else{
               $data = array(
            'uname' => $user,
             'full_name'=>$fullname,
                       'address'=>$address,
                       'phone_number'=>$phone,
                       'email'=>$email,
            //'upass' => md5($pass),
            'role'=> $role,
            'id' => $branch);
            
        }
        
        
        $this->db->where('u_id', $id);
        $this->db->update('user', $data);
        
    }
     public function delete_user($id)
    {
         $this->db->delete('user', array('u_id' => $id));
    }
    
    public function searchtran($limit,$start,$fromdate,$todate,$userdata,$branch,$agent,$timeperiod){
       
                $this->db->limit($limit, $start); 
 
       $a = array();
       $b = array();
       $c = array();
       $d  = array();
       $e = array();
        if((isset($userdata))&& $userdata ==!""){
            
          $a =array("u_id"=>$userdata); 
        }
        
      if((isset($branch))&& $branch ==!""){
         $b = array("branch"=>$branch);
        //$b = array($a,array("branch"=>$branch));
        $a = array_merge($a,$b);
      }
       if((isset($fromdate)&&($todate))&& $fromdate == !"" && $todate ==!""){
         $c = array('date >'=>$fromdate,'date <='=>$todate);
         $a = array_merge($a,$b,$c);
         
      }
       if((isset($agent))&& $agent ==!""){
            
          $d =array("agent"=>$agent); 
          $a = array_merge($a,$b,$c,$d);
        }
        
        if((isset($timeperiod))&& $timeperiod==!"" )
        {
             $e =array("date >="=>$timeperiod); 
          $a = array_merge($a,$b,$c,$d,$e);
        }
      
    if(isset($a))
    {
        $this->db->where($a);
    }
          $tranlist = $this->db->get('cme_tranzaction');
      
         return $tranlist->result();
         
    }
    
    public function usersearchtran($limit,$start,$fromdate,$todate,$agent,$id,$timeperiod){
       
                $this->db->limit($limit, $start); 
 
      
       $c = array();
       $d  = array();
       $e = array();
       
       if((isset($fromdate)&&($todate))&& $fromdate == !"" && $todate ==!""){
         $c = array('date >'=>$fromdate,'date <='=>$todate);
         $a = array_merge($c);
         
      }
       if((isset($agent))&& $agent ==!""){
            
          $d =array("agent"=>$agent); 
          $a = array_merge($c,$d);
        }
        
        if((isset($timeperiod))&& $timeperiod==!"" )
        {
             $e =array("date >="=>$timeperiod); 
          $a = array_merge($c,$d,$e);
        }
     
    if(isset($a))
    {
        $this->db->where($a);
        $this->db->where('u_id',$id);
    }
          $tranlist = $this->db->get('cme_tranzaction');
      
         return $tranlist->result();
         
    }
    
    public function searchtranpagi(){
         return $this->db->count_all(searchtran());
    }
    
     public function searchtrandata($fromdate,$todate,$userdata,$branch,$agent,$timeperiod){
       
              //  $this->db->limit($limit, $start); 
 
       $a = array();
       $b = array();
       $c = array();
       $d  = array();
       $e = array();
        if((isset($userdata))&& $userdata ==!""){
            
          $a =array("u_id"=>$userdata); 
        }
        
      if((isset($branch))&& $branch ==!""){
         $b = array("branch"=>$branch);
        //$b = array($a,array("branch"=>$branch));
        $a = array_merge($a,$b);
      }
       if((isset($fromdate)&&($todate))&& $fromdate == !"" && $todate ==!""){
         $c = array('date >='=>$fromdate,'date <='=>$todate);
         $a = array_merge($a,$b,$c);
         
      }
       if((isset($agent))&& $agent ==!""){
            
          $d =array("agent"=>$agent); 
          $a = array_merge($a,$b,$c,$d);
        }
         if((isset($timeperiod))&& $timeperiod==!"" )
        {
             $e =array("date >="=>$timeperiod); 
          $a = array_merge($a,$b,$c,$d,$e);
        }
      
    if(isset($a))
    {
        $this->db->where($a);
    }
          $tranlist = $this->db->get('cme_tranzaction');
      
         return $tranlist->result();
         
    }
    
    public function usersearchtrandata($fromdate,$todate,$agent,$id,$timeperiod){
       
              //  $this->db->limit($limit, $start); 
 
      
       $c = array();
       $d  = array();
       $e  = array();
        
        
     
       if((isset($fromdate)&&($todate))&& $fromdate == !"" && $todate ==!""){
         $c = array('date >='=>$fromdate,'date <='=>$todate);
         $a = array_merge($c);
         
      }
       if((isset($agent))&& $agent ==!""){
            
          $d =array("agent"=>$agent); 
          $a = array_merge($c,$d);
        }
        
         if((isset($timeperiod))&& $timeperiod==!"" )
        {
             $e =array("date >="=>$timeperiod); 
          $a = array_merge($c,$d,$e);
        }
      
    if(isset($a))
    {
        $this->db->where($a);
        $this->db->where('u_id',$id);
    }
          $tranlist = $this->db->get('cme_tranzaction');
      
         return $tranlist->result();
         
    }
    public function get_user_tran($id){
        $this->db->where('cid',$id);
         $tranlist = $this->db->get('cme_tranzaction');
      
         return $tranlist->result();
    }
    
    public function searchcus($cusid,$name,$address,$branch,$phone)
    {
        $a = array();
       $b = array();
       $c = array();
       $d  = array();
       $e = array();
        if((isset($cusid))&& $cusid ==!""){
            
          $a =array("cus_id"=>$cusid); 
        }
        
        
      if((isset($branch))&& $branch ==!""){
         $b = array("id"=>$branch);
        //$b = array($a,array("branch"=>$branch));
        $a = array_merge($a,$b);
      }
       if((isset($phone)&& $phone == !"")) {
         $c = array('conpersonal'=>$phone);
         $ph = array('conhome'=>$phone);
         $a = array_merge($a,$b,$c);
         
      }
       if((isset($name))&& $name ==!""){
            
          $d =array("fname"=>$name); 
          $a = array_merge($a,$b,$c,$d);
        }
      
        if((isset($address))&& $address ==!""){
            
          $e =array("address"=>$address); 
          $a = array_merge($a,$b,$c,$d,$e);
        }
    if(isset($a))
    {
        $this->db->where($a);
        if(isset($ph))
        {
        $this->db->or_where($ph);
    }
    }
          $cuslist = $this->db->get('customer_info');
      
         return $cuslist->result();
    }
    
     public function addSendTranzaction($id,$cid,$rnumber,$compname,$auth,$sname,$country,$amount,
                        $rname,$raddress,$contact,$identity,$idnumber,$date,$relation,$title,$rtitle,$branch,
                        $village,$ward,$tole,$city,$distric,$zone,$senderContact,$collectedAmount,$figureAmount)
    {
        
        
        $data = array(
            's_village'=>$village,
            's_ward'=>$ward,
            's_tole'=>$tole,
            's_city'=>$city,
            's_distric'=>$distric,
            's_zone'=>$zone,
            's_contact'=>$senderContact,
            'c_amount'=>$collectedAmount,
            'amt_figure'=>$figureAmount,
            'ref_number'=>$rnumber,
            'agent'=>$compname,
            'auth_code'=>$auth,
            's_name'=>$sname,
            's_country'=>$country,
             'amount'=>$amount,
            'u_id'=>$id,
            'cid'=>$cid,
            //'a_name'=>$income,
            'r_name'=>$rname,
            'r_address'=>$raddress,
            'r_contact'=>$contact,
             'r_id_type'=>$identity,
            'r_id_number'=>$idnumber,
            'date'=>$date,
            
            's_relation'=>$relation,
            's_title'=>$title,
            'r_title'=>$rtitle,
            'branch'=>$branch,
           
        );
         $this->db->insert('send_transaction', $data);
       
    }
    
     public function record_count_send() {
        return $this->db->count_all('send_transaction');
    }
    
      public function sendtranlist($limit,$start)
    {
        $this->db->limit($limit, $start);
        $tranlist = $this->db->get('send_transaction');
        return $tranlist->result();
    }
    
     public function searchSendData($fromdate,$todate,$userdata,$branch,$agent,$timeperiod){
       
              //  $this->db->limit($limit, $start); 
 
       $a = array();
       $b = array();
       $c = array();
       $d  = array();
       $e = array();
        if((isset($userdata))&& $userdata ==!""){
            
          $a =array("u_id"=>$userdata); 
        }
        
      if((isset($branch))&& $branch ==!""){
         $b = array("branch"=>$branch);
        //$b = array($a,array("branch"=>$branch));
        $a = array_merge($a,$b);
      }
       if((isset($fromdate)&&($todate))&& $fromdate == !"" && $todate ==!""){
         $c = array('date >='=>$fromdate,'date <='=>$todate);
         $a = array_merge($a,$b,$c);
         
      }
       if((isset($agent))&& $agent ==!""){
            
          $d =array("agent"=>$agent); 
          $a = array_merge($a,$b,$c,$d);
        }
         if((isset($timeperiod))&& $timeperiod==!"" )
        {
             $e =array("date >="=>$timeperiod); 
          $a = array_merge($a,$b,$c,$d,$e);
        }
      
    if(isset($a))
    {
        $this->db->where($a);
    }
          $tranlist = $this->db->get('send_transaction');
      
         return $tranlist->result();
         
    }
    
    public function searchSend($limit,$start,$fromdate,$todate,$userdata,$branch,$agent,$timeperiod){
       
                $this->db->limit($limit, $start); 
 
       $a = array();
       $b = array();
       $c = array();
       $d  = array();
       $e = array();
        if((isset($userdata))&& $userdata ==!""){
            
          $a =array("u_id"=>$userdata); 
        }
        
      if((isset($branch))&& $branch ==!""){
         $b = array("branch"=>$branch);
        //$b = array($a,array("branch"=>$branch));
        $a = array_merge($a,$b);
      }
       if((isset($fromdate)&&($todate))&& $fromdate == !"" && $todate ==!""){
         $c = array('date >'=>$fromdate,'date <='=>$todate);
         $a = array_merge($a,$b,$c);
         
      }
       if((isset($agent))&& $agent ==!""){
            
          $d =array("agent"=>$agent); 
          $a = array_merge($a,$b,$c,$d);
        }
        
        if((isset($timeperiod))&& $timeperiod==!"" )
        {
             $e =array("date >="=>$timeperiod); 
          $a = array_merge($a,$b,$c,$d,$e);
        }
      
    if(isset($a))
    {
        $this->db->where($a);
    }
          $tranlist = $this->db->get('send_transaction');
      
         return $tranlist->result();
         
    }
    
     public function userSendListAll($id)
    {
        
        $this->db->where('u_id',$id);
        $tranlist = $this->db->get('send_transaction');
        return $tranlist->result();
    }
    
      public function userSendList($limit,$start,$id)
    {
        $this->db->limit($limit, $start);
        $this->db->where('u_id',$id);
        $tranlist = $this->db->get('send_transaction');
        return $tranlist->result();
    }
    
     public function usersearchsenddata($fromdate,$todate,$agent,$id,$timeperiod){
       
              //  $this->db->limit($limit, $start); 
 
      
       $c = array();
       $d  = array();
       $e  = array();
        
        
     
       if((isset($fromdate)&&($todate))&& $fromdate == !"" && $todate ==!""){
         $c = array('date >='=>$fromdate,'date <='=>$todate);
         $a = array_merge($c);
         
      }
       if((isset($agent))&& $agent ==!""){
            
          $d =array("agent"=>$agent); 
          $a = array_merge($c,$d);
        }
        
         if((isset($timeperiod))&& $timeperiod==!"" )
        {
             $e =array("date >="=>$timeperiod); 
          $a = array_merge($c,$d,$e);
        }
      
    if(isset($a))
    {
        $this->db->where($a);
        $this->db->where('u_id',$id);
    }
          $tranlist = $this->db->get('send_transaction');
      
         return $tranlist->result();
         
    }
    
     public function usersearchsend($limit,$start,$fromdate,$todate,$agent,$id,$timeperiod){
       
                $this->db->limit($limit, $start); 
 
      
       $c = array();
       $d  = array();
       $e = array();
       
       if((isset($fromdate)&&($todate))&& $fromdate == !"" && $todate ==!""){
         $c = array('date >'=>$fromdate,'date <='=>$todate);
         $a = array_merge($c);
         
      }
       if((isset($agent))&& $agent ==!""){
            
          $d =array("agent"=>$agent); 
          $a = array_merge($c,$d);
        }
        
        if((isset($timeperiod))&& $timeperiod==!"" )
        {
             $e =array("date >="=>$timeperiod); 
          $a = array_merge($c,$d,$e);
        }
     
    if(isset($a))
    {
        $this->db->where($a);
        $this->db->where('u_id',$id);
    }
          $tranlist = $this->db->get('send_transaction');
      
         return $tranlist->result();
         
    }
    
    }