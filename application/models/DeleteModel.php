<?php
class DeleteModel extends CI_Model{


public function deleteInfo($id, $table)
{
    $this->db->where('id',$id);
    $del=$this->db->delete($table);
    if($del){
        return true;
    }
    else{
        return false;
    }
}

public function deleteInfoConds($conds, $table)
{
    $this->db->where($conds);
    $del=$this->db->delete($table);
    if($del){
        return true;
    }
    else{
        return false;
    }
}


public function deleteRole($id, $table)
{
    $this->db->where('role_id',$id);
    $del=$this->db->delete($table);
    if($del){
        return true;
    }
    else{
        return false;
    }
}



}
