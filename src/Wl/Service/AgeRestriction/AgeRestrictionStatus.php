<?php

namespace WlSdk\Wl\Service\AgeRestriction;

use WlSdk\WlSdkClient;

/**
 * Checks if client can book class with age restrictions.
 */
class AgeRestrictionStatus
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks if client can book class with age restrictions.
     *
     * @return AgeRestrictionStatusGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AgeRestrictionStatusGetRequest $request): AgeRestrictionStatusGetResponse
    {
        return new AgeRestrictionStatusGetResponse($this->client->request('/Wl/Service/AgeRestriction/AgeRestrictionStatus.json', $request->params(), 'GET'));
    }
}
