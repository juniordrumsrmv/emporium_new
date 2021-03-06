<?php namespace Emporium;

/**
 * Eloquent class to describe the label_promotion table
 *
 * automatically generated by ModelGenerator.php
 */
class LabelPromotion extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'label_promotion';

    public $primaryKey = 'code';

    public $timestamps = false;

    public function getDates()
    {
        return array('start', 'finish', 'label_printing_date');
    }

    protected $fillable = array('plu_id', 'price', 'start', 'finish', 'reason_type_key', 'store_key', 'label_sku',
        'label_quantity', 'label_printing_date', 'status');


}
