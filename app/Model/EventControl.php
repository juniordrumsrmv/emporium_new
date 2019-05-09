<?php namespace Emporium;

/**
 * Eloquent class to describe the event_control table
 *
 * automatically generated by ModelGenerator.php
 */
class EventControl extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'event_control';

    public $primaryKey = 'evctl_key';

    public $timestamps = false;

    public function getDates()
    {
        return array('evctl_time');
    }

    protected $fillable = array('evctl_id', 'agent_key', 'evctl_time');


}