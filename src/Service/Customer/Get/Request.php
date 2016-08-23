<?php

namespace Speicher210\Monsum\Api\Service\Customer\Get;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Monsum\Api\AbstractRequest;
use Speicher210\Monsum\Api\GetRequestTrait;

/**
 * The request for getting the customers.
 */
class Request extends AbstractRequest
{
    use GetRequestTrait;

    /**
     * The request body.
     *
     * @var array
     *
     * @JMS\Type("Speicher210\Monsum\Api\Service\Customer\Get\RequestData")
     * @JMS\SerializedName("FILTER")
     */
    protected $filter;

    /**
     * Constructor.
     *
     * @param RequestData $requestData The data for the request.
     */
    public function __construct(RequestData $requestData = null)
    {
        parent::__construct();
        $this->filter = $requestData;
    }

    /**
     * {@inheritdoc}
     */
    public function getService()
    {
        return 'customer.get';
    }
}
