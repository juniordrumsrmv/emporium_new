<?php namespace Emporium;

/**
 * Eloquent class to describe the servertoserver_comparison table
 *
 * automatically generated by ModelGenerator.php
 */
class ServertoserverComparison extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'servertoserver_comparison';

    public $primaryKey = 'to_store_key';

    public $timestamps = false;

    public $incrementing = false;

    public function getDates()
    {
        return array('last_change_time');
    }

    protected $fillable = array('description', 'store_ip', 'directory', 'ctrl_file', 'update_wait_time',
        'last_change_time');


}
