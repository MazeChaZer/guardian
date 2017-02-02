<?php

namespace TimTegeler\Guardian;

use Psr\Http\Message\ServerRequestInterface;

/**
 * Interface AuthenticationInterface
 * @package TimTegeler\Guardian
 */
interface AuthenticationInterface
{

    /**
     * @param ServerRequestInterface $request
     * @return bool
     */
    public function authenticate(ServerRequestInterface $request);

}
