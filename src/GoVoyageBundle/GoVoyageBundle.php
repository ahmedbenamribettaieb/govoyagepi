<?php

namespace GoVoyageBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class GoVoyageBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
