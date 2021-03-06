<?php namespace Emporium;

/**
 * Eloquent class to describe the return_control table
 *
 * automatically generated by ModelGenerator.php
 */
class ReturnControl extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'return_control';

    public $primaryKey = 'return_number';

    public $timestamps = false;

    public function getDates()
    {
        return array('start_time', 'fiscal_date', 'used_start_time', 'used_fiscal_date', 'validity_begin', 'validity_end');
    }

    protected $fillable = array('store_key', 'pos_number', 'ticket_number', 'transaction', 'start_time', 'fiscal_date',
        'used_store_key', 'used_pos_number', 'used_ticket_number', 'used_transaction', 'used_start_time', 'used_fiscal_date',
        'amount', 'status', 'reason', 'internal_return_number', 'type', 'validity_begin', 'validity_end');


}
