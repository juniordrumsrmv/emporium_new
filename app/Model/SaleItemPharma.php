<?php namespace Emporium;

/**
 * Eloquent class to describe the sale_item_pharma table
 *
 * automatically generated by ModelGenerator.php
 */
class SaleItemPharma extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'sale_item_pharma';

    public $primaryKey = 'sequence';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('plu_id', 'desc_plu', 'quantity', 'unit_price', 'amount', 'discount', 'clerk_key',
        'request_number', 'batch', 'ms_code', 'dcb_code', 'dcb_description', 'pharma_list_type');


}
