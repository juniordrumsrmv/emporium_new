<?php namespace Emporium;

/**
 * Eloquent class to describe the 60M_sintegra table
 *
 * automatically generated by ModelGenerator.php
 */
class 60MSintegra extends \Illuminate\Database\Eloquent\Model
{
    protected $table = '60M_sintegra';

    public $primaryKey = '';

    public $timestamps = false;

    public $incrementing = false;

    public function getDates()
    {
        return array('fiscal_date');
    }

    protected $fillable = array('store_key', 'type', 'sub_type', 'fiscal_date', 'ecf_serial', 'ecf_number', 'doc_model',
        'initial_ticket', 'ticket_number', 'Z_number', 'restart_count', 'amount', 'final_GT');


}
