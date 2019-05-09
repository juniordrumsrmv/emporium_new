<?php

namespace Emporium\Policies;

use Emporium\Model\MenuItem;
use Emporium\Model\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MenuItemPolicy
{
    use HandlesAuthorization;

    public function view() {
        dd('HERE 1');
        return false;
    }

//    public function before(){
//        die('HERE 1');
//    }
}
