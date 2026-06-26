<?php

namespace WlSdk\Wl\Business;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Business/EnterForm.json
 */
class EnterForm
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Business/EnterForm.json.
     *
     * @return EnterFormGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(EnterFormGetRequest $request): EnterFormGetResponse
    {
        return new EnterFormGetResponse($this->client->request('/Wl/Business/EnterForm.json', $request->params(), 'GET'));
    }
}
