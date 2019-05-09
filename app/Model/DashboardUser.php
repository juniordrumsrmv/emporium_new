<?php namespace Emporium;

/**
 * Eloquent class to describe the dashboard_user table
 *
 * automatically generated by ModelGenerator.php
 */
class DashboardUser extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'dashboard_user';

    public $primaryKey = 'prm_id';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('prm_value');


}
