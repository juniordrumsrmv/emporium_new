<?php namespace Emporium;

/**
 * Eloquent class to describe the cst_dst_department table
 *
 * automatically generated by ModelGenerator.php
 */
class CstDstDepartment extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'cst_dst_department';

    public $primaryKey = 'department_key';

    public $timestamps = false;

    public $incrementing = false;

    public function getDates()
    {
        return array('last_change_time');
    }

    protected $fillable = array('discount', 'last_change_time');


}
