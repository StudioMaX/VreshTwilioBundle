<?php
namespace Vresh\TwilioBundle\Tests\DependencyInjection;

use Vresh\TwilioBundle\Service\TwilioWrapper,
    Vresh\TwilioBundle\Service\TwilioCapabilityWrapper;

/**
 * Test the TwilioWrapper
 *
 * @author Fridolin Koch <info@fridokoch.de>
 *
 */
class TwilioWrapperTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function testTwilioWrapper()
    {
        $twilio = new TwilioWrapper('AAAA', 'XXXX');
        //check if instance
        $this->assertInstanceOf('Vresh\TwilioBundle\Service\TwilioWrapper', $twilio);
    }

    /**
     * @test
     */
    public function testCreateInstance()
    {
        $twilio = new TwilioWrapper('AAAA', 'XXXX');
        //create other instance
        $otherInstance = $twilio->createInstance('BBBB', 'CCCCC');
        //check class
        $this->assertInstanceOf('\Twilio\Rest\Client', $otherInstance);
    }

    /**
     * @test
     */
    public function testCapabilityWrapper()
    {
        $twilio = new TwilioCapabilityWrapper('AAAA', 'XXXX');
        //check class
        $this->assertInstanceOf('\Twilio\Jwt\ClientToken', $twilio);
    }

    /**
     * @test
     */
    public function testCapabilityCreateInstance()
    {
        $twilio = new TwilioCapabilityWrapper('AAAA', 'XXXX');
        //create other instance
        $otherInstance = $twilio->createInstance('BBBB', 'CCCCC');
        //check class
        $this->assertInstanceOf('\Twilio\Jwt\ClientToken', $otherInstance);
    }
}
