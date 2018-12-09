<?php

namespace FroshProfiler\Components\Collectors;

use Enlight_Controller_Action;
use FroshProfiler\Components\Struct\Profile;

/**
 * Class ExceptionCollector
 */
class ExceptionCollector implements CollectorInterface
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'exception';
    }

    /**
     * @param Enlight_Controller_Action $controller
     * @param Profile                   $profile
     */
    public function collect(Enlight_Controller_Action $controller, Profile $profile)
    {
        $error = $controller->Request()->getParam('error_handler');

        if ($error && isset($error->exception)) {
            $profile->setException($error->exception);
        }
    }

    public function getToolbarTemplate()
    {
    }
}
