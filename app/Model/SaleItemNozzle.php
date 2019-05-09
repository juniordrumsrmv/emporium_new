<?php namespace Emporium;

/**
 * Eloquent class to describe the sale_item_nozzle table
 *
 * automatically generated by ModelGenerator.php
 */
class SaleItemNozzle extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'sale_item_nozzle';

    public $primaryKey = 'nozzle_number';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('pos_number', 'voided', 'tank_number', 'plu_id', 'desc_plu', 'quantity', 'unit_price',
        'cost', 'amount', 'gt_quantity', 'gt_amount', 'cashier_key', 'customer_key', 'customer_id', 'cst_type_key');


}
