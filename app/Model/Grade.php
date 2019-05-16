<?php namespace Emporium;

/**
 * Eloquent class to describe the grade table
 *
 * automatically generated by ModelGenerator.php
 */
class Grade extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'grade';

    public $primaryKey = 'pos_id';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('cfop');


}
