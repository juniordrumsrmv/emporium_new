<?php namespace Emporium;

/**
 * Eloquent class to describe the dashboard_conc_item table
 *
 * automatically generated by ModelGenerator.php
 */
class DashboardConcItem extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'dashboard_conc_item';

    public $primaryKey = 'ncupom';

    public $timestamps = false;

    public $incrementing = false;

    public function getDates()
    {
        return array('fiscal_date');
    }

    protected $fillable = array('store_key', 'fiscal_date', 'nrec', 'situacao', 'cfeerros', 'conciliare');


}
