<?php

namespace Imd\MyFosUserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ImdMyFosUserBundle extends Bundle
{
	public function getParent()
    {
        return 'FOSUserBundle';
    }
}
