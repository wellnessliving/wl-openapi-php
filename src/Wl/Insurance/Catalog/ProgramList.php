<?php

namespace WlSdk\Wl\Insurance\Catalog;

use WlSdk\WlSdkClient;

/**
 * Returns a list of active insurance programs for the specified promotion.
 */
class ProgramList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns a list of active insurance programs for the specified promotion.
     *
     * Requires backend access and an active Wellness Program feature for the business. Returns all available
     * insurance programs with pricing, organization name, partner name, and a link to the insurance detail page.
     *
     * @return ProgramListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ProgramListGetRequest $request): ProgramListGetResponse
    {
        return new ProgramListGetResponse($this->client->request('/Wl/Insurance/Catalog/ProgramList.json', $request->params(), 'GET'));
    }
}
