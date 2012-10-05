<?php

namespace Wbn\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class WbnUserBundle extends Bundle
{
	public function getParent()
    {
        return 'FOSUserBundle';
    }
}
