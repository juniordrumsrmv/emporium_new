<?php namespace Emporium;

/**
 * Eloquent class to describe the plu_store table
 *
 * automatically generated by ModelGenerator.php
 */
class PluStore extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'plu_store';

    public $primaryKey = 'plu_key';

    public $timestamps = false;

    public $incrementing = false;

    public function getDates()
    {
        return array('out_of_stock_day', 'last_entered_day', 'last_sale_day', 'last_inventory_day', 'last_change_time');
    }

    protected $fillable = array('desired_margin_percent', 'quantity_in_stock', 'out_of_stock_day', 'last_entered_day',
        'last_sale_day', 'tax_type_key', 'invoice_tax_type', 'minimal_stock', 'last_inventory_day', 'quantity_inventory',
        'not_for_sale', 'split_interest_percent', 'delayed_payment_percent', 'min_splits', 'max_splits', 'order_type',
        'operation_type', 'qty_from_amount', 'last_change_time', 'wholesale_quantity', 'adder', 'total_tax', 'total_tax1',
        'total_tax2', 'base_plu_key', 'quantity', 'is_base_plu', 'fcp_percent');


}
