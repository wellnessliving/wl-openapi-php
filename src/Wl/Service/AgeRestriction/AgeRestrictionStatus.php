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
     * Resolves the class period date at the client's profile timezone (or the location timezone,
     *  if the profile timezone is not enabled) and checks the age restriction status for that date.
     *  Sets `can_book` to `true` only when the restriction status is available for booking.
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
