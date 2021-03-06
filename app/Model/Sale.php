<?php namespace Emporium;

/**
 * Eloquent class to describe the sale table
 *
 * automatically generated by ModelGenerator.php
 */
class Sale extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'sale';

    public $primaryKey = 'start_time';

    public $timestamps = false;

    public $incrementing = false;

    public function getDates()
    {
        return array('received_time', 'pos_start_time', 'fiscal_date');
    }

    protected $fillable = array('voided', 'post_sale_void', 'sale_type', 'customer_key', 'amount_due', 'change_amount',
        'change_media_id', 'clerk_key', 'cashier_key', 'authorizer_key', 'discount', 'increase', 'interest', 'final_GT',
        'void_amount', 'received_time', 'pos_start_time', 'void_ticket_number', 'fiscal_date', 'delivery', 'promotion',
        'customer_id', 'customer_id_type', 'subtotal_discount', 'type_price', 'reference_price', 'default_price',
        'cpu_clock_start', 'cpu_clock_subtotal', 'cpu_clock_end', 'cpu_clock_close_drawer');


}
