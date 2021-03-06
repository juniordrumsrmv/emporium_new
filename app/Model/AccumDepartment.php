<?php namespace Emporium;

/**
 * Eloquent class to describe the accum_department table
 *
 * automatically generated by ModelGenerator.php
 */
class AccumDepartment extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'accum_department';

    public $primaryKey = 'hour';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('quantity', 'quantity_canc', 'amount', 'amount_canc', 'return_quantity',
        'return_amount');


}
