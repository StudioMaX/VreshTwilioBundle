<?php

namespace Vresh\TwilioBundle\Service;

use Twilio\Rest\Client;

/**
 * This file is part of the VreshTwilioBundle.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Fridolin Koch <info@fridokoch.de>
 */
class TwilioWrapper extends Client
{
    /**
     * @param string $username
     * @param string $password
     * @param string $accountSid
     * @param string $region
     */
    public function __construct($username = null, $password = null, $accountSid = null, $region = null)
    {
        parent::__construct($username, $password, $accountSid, $region);
    }

    /**
     * Returns a new Twilio\Rest\Client instance from the given parameters
     *
     * @param string $username
     * @param string $password
     * @param string $accountSid
     * @param string $region
     *
     * @return Client
     */
    public function createInstance($username = null, $password = null, $accountSid = null, $region = null)
    {
        return new Client($username, $password, $accountSid, $region);
    }

}
