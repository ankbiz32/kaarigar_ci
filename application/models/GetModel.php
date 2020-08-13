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

    public function getPhone($phn)
    {
        $query= $this->db->select('*')
                        ->where('mobile_no',$phn)
                        ->get('users');
        return $query->num_rows();
    }
    public function checkSvc($sid, $lid)
    {
        $query= $this->db->select('*')
                        ->where('location_id',$lid)
                        ->where('service_id',$sid)
                        ->get('services_locations');
        return $query->num_rows();
    }

    public function getInfoCondsId($table,$conds)
    {
        $this->db->where($conds);
        return $this->db->get($table)->row();
    }


     public function getInfoConds($table,$conds)
     {
         $this->db->where($conds);
         return $this->db->get($table)->result();
     }

     public function getInfoCondsArr($table,$conds)
     {
         $this->db->where($conds);
         return $this->db->get($table)->result_array()->service_id;
     }
    
     public function getServicesInLoc($table,$conds)
     {
        return $this->db->select('service_id')->where($conds)->get($table)->result_array();
     }
    
     public function getLocationsInSvc($id)
     {
        return $this->db->select('l.area, l.city, l.state, l.pin_code')
                ->from('services_locations sl')
                ->where('sl.service_id',$id)
                ->where('l.is_active',1)
                ->join('locations l', 'l.id = sl.location_id', 'LEFT')
                ->get()
                ->result();
     }
    
     public function getAllBookings()
     {
        return $this->db->select('*, b.id, s.name, u.fname, u.mobile_no')
                ->from('bookings b')
                ->join('services s', 's.id = b.service_id', 'LEFT')
                ->join('users u', 'u.id = b.user_id', 'LEFT')
                ->get()
                ->result();
     }
    
     public function getBookings($id)
     {
        return $this->db->select('*, s.name')
                ->from('bookings b')
                ->where('b.user_id',$id)
                ->join('services s', 's.id = b.service_id', 'LEFT')
                ->get()
                ->result();
     }
    
     public function getBookingDetails($booking_id)
     {
        $booking['info']= $this->db->select('*, b.id, s.name, u.fname, u.mobile_no')
                                    ->from('bookings b')
                                    ->join('services s', 's.id = b.service_id', 'LEFT')
                                    ->join('users u', 'u.id = b.user_id', 'LEFT')
                                    ->where('b.id',$booking_id)
                                    ->get()
                                    ->row();
        // $ids=$this->getInfoConds('booking_info',['booking_id'=>$booking_id]);
        $booking['sub_svc']= $this->db->select('*, b.id')
                                    ->from('booking_info b')
                                    ->join('sub_services s', 's.id = b.sub_service_id', 'LEFT')
                                    ->where('b.id',$booking_id)
                                    ->get()
                                    ->result();
     }

     public function getServicesWhereIn($locs)
     {
         return $this->db->or_where_in('id', $locs)
                    ->get('services')->result();
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
        return $this->db->where('role','admin')->get('users')->row();
    }

    // Fetch Website Profile
    public function getWebProfile()
    {
        return $this->db->get('webprofile')->row();
    }

    

}
?>