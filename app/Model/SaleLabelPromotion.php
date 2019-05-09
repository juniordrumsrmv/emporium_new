<?php namespace Emporium;

/**
 * Eloquent class to describe the sale_label_promotion table
 *
 * automatically generated by ModelGenerator.php
 */
class SaleLabelPromotion extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'sale_label_promotion';

    public $primaryKey = 'item_sequence';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('label_sku', 'plu_id', 'desc_plu', 'quantity', 'amount', 'discount');


}