<?php namespace Emporium;

/**
 * Eloquent class to describe the plan_split_type table
 *
 * automatically generated by ModelGenerator.php
 */
class PlanSplitType extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'plan_split_type';

    public $primaryKey = 'plan_split_type_key';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('plan_split_type_desc');


}
