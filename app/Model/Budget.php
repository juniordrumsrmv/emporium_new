<?php namespace Emporium;

/**
 * Eloquent class to describe the budget table
 *
 * automatically generated by ModelGenerator.php
 */
class Budget extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'budget';

    public $primaryKey = 'budget_date';

    public $timestamps = false;

    public $incrementing = false;

    public function getDates()
    {
        return array('last_change_time');
    }

    protected $fillable = array('budget_sale', 'budget_margim', 'last_change_time');


}