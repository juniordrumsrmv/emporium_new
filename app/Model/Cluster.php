<?php namespace Emporium;

/**
 * Eloquent class to describe the cluster table
 *
 * automatically generated by ModelGenerator.php
 */
class Cluster extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'cluster';

    public $primaryKey = 'store_key';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('server_name', 'server_path');


}
