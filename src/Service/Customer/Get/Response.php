<?php

namespace Speicher210\Monsum\Api\Service\Customer\Get;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Monsum\Api\AbstractResponse;

/**
 * Response when getting the customers.
 */
class Response extends AbstractResponse
{
    /**
     * The customers from the response.
     *
     * @var array
     *
     * @JMS\Type("array<Speicher210\Monsum\Api\Model\Customer>")
     * @JMS\SerializedName("CUSTOMERS")
     */
    protected $customers = array();

    /**
     * Get the customers from the response.
     *
     * @return \Speicher210\Monsum\Api\Model\Customer[]
     */
    public function getCustomers()
    {
        return $this->customers;
    }
}
