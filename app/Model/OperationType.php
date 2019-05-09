<?php namespace Emporium;

/**
 * Eloquent class to describe the operation_type table
 *
 * automatically generated by ModelGenerator.php
 */
class OperationType extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'operation_type';

    public $primaryKey = 'operation_type_key';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('description', 'ope_type', 'observation', 'op_signal', 'op_export');


}