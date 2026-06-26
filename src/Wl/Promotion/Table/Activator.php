<?php

namespace WlSdk\Wl\Promotion\Table;

use WlSdk\WlSdkClient;

/**
 * Activates/deactivates record list.
 */
class Activator
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Activates/deactivates record list.
     *
     * @return ActivatorPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ActivatorPostRequest $request): ActivatorPostResponse
    {
        return new ActivatorPostResponse($this->client->request('/Wl/Promotion/Table/Activator.json', $request->params(), 'POST'));
    }
}
