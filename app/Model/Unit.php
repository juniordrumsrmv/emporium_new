<?php namespace Emporium;

/**
 * Eloquent class to describe the unit table
 *
 * automatically generated by ModelGenerator.php
 */
class Unit extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'unit';

    public $primaryKey = 'unit_key';

    public $timestamps = false;

    protected $fillable = array('short_name', 'long_name', 'max_decimals');


}
