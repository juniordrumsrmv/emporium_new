<?php namespace Emporium;

/**
 * Eloquent class to describe the nfce_number table
 *
 * automatically generated by ModelGenerator.php
 */
class NfceNumber extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'nfce_number';

    public $primaryKey = 'pos_number';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('nf_number');


}
