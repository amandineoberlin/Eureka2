<?php

namespace Intranet\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class IntranetUserBundle extends Bundle {

    public function getParent() {
        return 'FOSUserBundle';
    }
}
