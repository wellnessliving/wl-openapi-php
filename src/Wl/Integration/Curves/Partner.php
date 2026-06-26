<?php

namespace WlSdk\Wl\Integration\Curves;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Integration/Curves/Partner.json
 */
class Partner
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Integration/Curves/Partner.json.
     *
     * @return PartnerGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PartnerGetRequest $request): PartnerGetResponse
    {
        return new PartnerGetResponse($this->client->request('/Wl/Integration/Curves/Partner.json', $request->params(), 'GET'));
    }
}
