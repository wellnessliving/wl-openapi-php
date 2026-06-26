<?php

namespace WlSdk\Wl\Business\Churn;

use WlSdk\WlSdkClient;

/**
 * Gets information about a business.
 */
class BusinessChurn
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets information about a business.
     *
     * @return BusinessChurnGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(BusinessChurnGetRequest $request): BusinessChurnGetResponse
    {
        return new BusinessChurnGetResponse($this->client->request('/Wl/Business/Churn/BusinessChurn.json', $request->params(), 'GET'));
    }

    /**
     * Churns the business.
     *
     * @return BusinessChurnPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(BusinessChurnPostRequest $request): BusinessChurnPostResponse
    {
        return new BusinessChurnPostResponse($this->client->request('/Wl/Business/Churn/BusinessChurn.json', $request->params(), 'POST'));
    }
}
