<?php

namespace Emporium\Model;

/**
 * Eloquent class to describe the user table
 *
 * automatically generated by ModelGenerator.php
 */
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'user';

    protected $rememberTokenName = false;

    public $primaryKey = 'agent_key';

    public $timestamps = false;

    public $incrementing = false;

    public function getDates()
    {
        return array('pos_load_last_time', 'pos_save_last_time', 'user_birthday', 'expiration_date', 'last_change_time', 'user_date_inc', 'user_date_alt_status', 'user_date_inactive_status', 'block_date');
    }

    protected $fillable = array('alternate_id', 'password', 'language', 'email', 'clerk_percent',
        'pos_load_last_store_key', 'pos_load_last_pos_number', 'pos_load_last_time', 'pos_save_last_store_key',
        'pos_save_last_pos_number', 'pos_save_last_time', 'store_key', 'usr_mode', 'treatment', 'sms', 'user_ident',
        'user_birthday', 'user_status', 'cript_password', 'expiration_date', 'security_level', 'biometrics', 'last_change_time',
        'user_date_inc', 'user_date_alt_status', 'matriculation', 'user_date_inactive_status', 'user_trace', 'user_trace_file',
        'user_db_user', 'user_db_pass', 'user_color_set', 'user_bgcolor1', 'user_bgcolor2', 'user_bgcolor3', 'user_bgcolor4',
        'user_bgcolor5', 'user_bgcolor6', 'user_txcolor1', 'user_txcolor2', 'user_tr_hover', 'user_lines_per_screen',
        'user_menu_layout', 'user_theme_option', 'user_theme', 'user_enable_config_options', 'count_error', 'block_date');

    protected $hidden = [
        'password'
    ];

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        return null; // not supported
    }

    public function setRememberToken($value)
    {
        // not supported
    }

    public function getRememberTokenName()
    {
        return null; // not supported
    }


}
