<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Supersim\V1;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\Values;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains beta products that are subject to change. Use them with caution.
 */
class SmsCommandContext extends InstanceContext {
    /**
     * Initialize the SmsCommandContext
     *
     * @param Version $version Version that contains the resource
     * @param string $sid The SID that identifies the resource to fetch
     */
    public function __construct(Version $version, $sid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['sid' => $sid, ];

        $this->uri = '/SmsCommands/' . \rawurlencode($sid) . '';
    }

    /**
     * Fetch the SmsCommandInstance
     *
     * @return SmsCommandInstance Fetched SmsCommandInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): SmsCommandInstance {
        $payload = $this->version->fetch('GET', $this->uri);

        return new SmsCommandInstance($this->version, $payload, $this->solution['sid']);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Supersim.V1.SmsCommandContext ' . \implode(' ', $context) . ']';
    }
}