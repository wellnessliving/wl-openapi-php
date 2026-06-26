<?php

namespace WlSdk\Thoth\WlPay\Bank;

use WlSdk\WlSdkClient;

/**
 * Creates a new payment source.
 */
class Entity
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Creates a new payment source.
     *
     * @return EntityPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(EntityPostRequest $request): EntityPostResponse
    {
        return new EntityPostResponse($this->client->request('/Thoth/WlPay/Bank/Entity.json', $request->params(), 'POST'));
    }
}
