<?php

namespace Vresh\TwilioBundle\Service;

use Twilio\Jwt\ClientToken;

/**
 * This file is part of the VreshTwilioBundle.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Joseph Le <hello@josephle.me>
 */
class TwilioCapabilityWrapper extends ClientToken
{
    /**
     * @param string $sid
     * @param string $token
     */
    public function __construct($sid, $token)
    {
        parent::__construct($sid, $token);
    }

    /**
     * Returns a new \Twilio\Jwt\ClientToken instance from the given parameters
     *
     * @param      $sid
     * @param      $token
     *
     * @return ClientToken
     */
    public function createInstance($sid, $token)
    {
        return new ClientToken($sid, $token);
    }

}
