<?php

namespace WlSdk\Wl\Profile\Waiver;

use WlSdk\WlSdkClient;

/**
 * Gets list of subscribed waivers.
 */
class Waiver
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets list of subscribed waivers.
     *
     * Validates the business and the user, then checks that the current user has access to view
     *  the profile. When the business belongs to a franchise that shares waivers across all
     *  franchise locations, waivers are loaded from the franchisor business instead. Each waiver
     *  includes the local and UTC agreement dates, the rendered contract text, the IP address used
     *  to sign, and a link to the signature image, along with the minor age configured for parent
     *  or guardian consent.
     *
     * @return WaiverGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(WaiverGetRequest $request): WaiverGetResponse
    {
        return new WaiverGetResponse($this->client->request('/Wl/Profile/Waiver/Waiver.json', $request->params(), 'GET'));
    }
}
