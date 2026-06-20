<?php

namespace WlSdk\Wl\Business\Partner;

use WlSdk\WlSdkClient;

/**
 * Returns partner settings for the business identified by the given partner code.
 */
class PartnerSettings
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns partner settings for the business identified by the given partner code.
     *
     * Used when rendering the Partner Program landing page. Resolves the partner code to a business and
     * returns the business key and the home tour type so the landing page can show the appropriate demo
     * tour. A daily failed-request limit per IP prevents brute-force enumeration of partner codes.
     *
     * @return PartnerSettingsGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PartnerSettingsGetRequest $request): PartnerSettingsGetResponse
    {
        return new PartnerSettingsGetResponse($this->client->request('/Wl/Business/Partner/PartnerSettings.json', $request->params(), 'GET'));
    }
}
