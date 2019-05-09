<?php namespace Emporium;

/**
 * Eloquent class to describe the banking_location_amount table
 *
 * automatically generated by ModelGenerator.php
 */
class BankingLocationAmount extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'banking_location_amount';

    public $primaryKey = 'media_id';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('amount_added', 'amount_subtracted', 'extended_media_id');


}
