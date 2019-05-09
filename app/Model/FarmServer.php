<?php namespace Emporium;

/**
 * Eloquent class to describe the farm_server table
 *
 * automatically generated by ModelGenerator.php
 */
class FarmServer extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'farm_server';

    public $primaryKey = 'farm_server_key';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('farm_server_name', 'farm_server_ip', 'farm_server_priority', 'farm_server_status',
        'farm_server_directory', 'farm_server_substitute');


}
