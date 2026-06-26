<?php

namespace WlSdk\Wl\Integration\Curves\Partner;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Integration/Curves/Partner/PartnerList.json
 */
class PartnerList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Integration/Curves/Partner/PartnerList.json.
     *
     * @return PartnerListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PartnerListGetRequest $request): PartnerListGetResponse
    {
        return new PartnerListGetResponse($this->client->request('/Wl/Integration/Curves/Partner/PartnerList.json', $request->params(), 'GET'));
    }
}
