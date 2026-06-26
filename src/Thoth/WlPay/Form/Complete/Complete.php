<?php

namespace WlSdk\Thoth\WlPay\Form\Complete;

use WlSdk\WlSdkClient;

/**
 * Returns information about purchase.
 */
class Complete
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns information about purchase.
     *
     * @return CompleteGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CompleteGetRequest $request): CompleteGetResponse
    {
        return new CompleteGetResponse($this->client->request('/Thoth/WlPay/Form/Complete/Complete.json', $request->params(), 'GET'));
    }
}
