<?php namespace Emporium;

/**
 * Eloquent class to describe the access_type table
 *
 * automatically generated by ModelGenerator.php
 */
class AccessType extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'access_type';

    public $primaryKey = 'access_type_key';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('access_type_name');


}