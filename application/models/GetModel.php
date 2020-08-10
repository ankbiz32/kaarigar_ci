<?php
class GetModel extends CI_Model{

    // Fetch info
    public function getInfo($table, $lim=null)
    {
        return $this->db->limit($lim)->get($table)->result();
    }

    // Fetch info by id
    public function getInfoById($id, $table)
    {
        $this->db->where('id', $id);
        return $this->db->get($table)->row();
    }

    // Fetch info by order
    public function getInfoByOrder($table)
    {
        return $this->db->order_by('id', 'desc')
                        ->get($table)
                        ->result();
    }

    public function getRegInfoById($id)
    {
        $this->db->select('*')
                ->from('partner_reg r')
                ->join('cities', 'cities.id = r.city_id', 'LEFT')
                ->join('states', 'cities.state_id = states.id', 'LEFT')
                ->join('reg_roles', 'reg_roles.role_id = r.role_id', 'LEFT')
                ->where('r.reg_id', $id);
        return $this->db->get()->row();
    }

    public function getPhone($phn)
    {
        $query= $this->db->select('*')
                        ->where('mobile_no',$phn)
                        ->get('users');
        return $query->num_rows();
    }

     public function getInfoConds($table,$conds)
     {
         $this->db->where($conds);
         return $this->db->get($table)->result();
     }
    
     public function getInfoCondsId($table,$conds)
     {
         $this->db->where($conds);
         return $this->db->get($table)->row();
     }
    
    // Fetch Enquiries
    public function getEnquiries()
    {
        return $this->db->get('enquiries')->result();
    }

    // Count no. of rows in table 
    public function record_count($table) 
    {
        return $this->db->count_all($table);
    }
    
    // Fetch Admin Profile
    public function getAdminProfile()
    {
        return $this->db->get('users')->row();
    }

    // Fetch Website Profile
    public function getWebProfile()
    {
        return $this->db->get('webprofile')->row();
    }

    

}
?>