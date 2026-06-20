<?php
namespace WlSdk\Wl\Business;

use WlSdk\WlSdkClient;

/**
 * Returns detailed information about the specified business, including locale, franchise status, services, tips,
 * social URLs, and logo.
 */
class Data
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns detailed information about the specified business, including locale, franchise status, services, tips, social URLs, and logo.
     *
     * Used to bootstrap client-facing pages and widgets that need to know the full business profile: which
     * services are enabled, tip and progress log settings, franchise relationship, social media links, and
     * deep links to the schedule, catalog, and sign-up pages. Accepts either a business key or a location
     * request token for widget contexts where the key is not available.
     *
     * @return DataGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(DataGetRequest $request): DataGetResponse
    {
        return new DataGetResponse($this->client->request('/Wl/Business/Data.json', $request->params(), 'GET'));
    }
}
