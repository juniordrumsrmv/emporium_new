<?php

namespace Emporium\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

class MenuItemPolicy
{
    use HandlesAuthorization;

    public function update() {
        dd('HERE 1');
        return true;
    }
}
