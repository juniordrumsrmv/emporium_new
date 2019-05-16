<?php namespace Emporium;

/**
 * Eloquent class to describe the fiscal_status table
 *
 * automatically generated by ModelGenerator.php
 */
class FiscalStatus extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'fiscal_status';

    public $primaryKey = 'start_time';

    public $timestamps = false;

    public $incrementing = false;

    public function getDates()
    {
        return array('fiscal_date', 'date_alter');
    }

    protected $fillable = array('fiscal_date', 'transaction_type', 'Z_number', 'initial_GT', 'final_GT', 'void',
        'discount', 'increase', 'cashier_key', 'authorizer_key', 'ecf_number', 'initial_ticket', 'restart_count',
        'quantity_void', 'quantity_discount', 'quantity_sale', 'quantity_void_life', 'quantity_nfnv', 'quantity_void_nfnv',
        'quantity_report', 'quantity_ribbon_detail', 'quantity_nfv_tef', 'initial_ticket_fiscal', 'finish_ticket_fiscal',
        'time_printing_cupons', 'total_time', 'quantity_report_x', 'quantity_left_z', 'ecf_mfd', 'ecf_serial', 'ecf_version',
        'ecf_model', 'ecf_manufacturer', 'date_alter', 'user_key', 'status_inc', 'quantity_mfd_bytes',
        'quantity_mfd_left_bytes');


}
