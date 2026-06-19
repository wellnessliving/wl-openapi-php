<?php
namespace WlSdk\Wl\User\Referrer;

use WlSdk\WlSdkClient;

/**
 * Searches for a referrer by the given search string and returns their profile information.
 */
class ReferrerGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Searches for a referrer by the given search string and returns their profile information.
     *
     * Searches for a matching client by member ID, email address, phone number, or encrypted user
     * key, and returns their name, email, phone, and photo. Returns empty or `null` fields when
     * no matching client is found. Search is rate-limited for guest and client callers.
     *
     * @return ReferrerGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ReferrerGetRequest $request): ReferrerGetResponse
    {
        return new ReferrerGetResponse($this->client->request('/Wl/User/Referrer/Referrer.json', $request->params(), 'GET'));
    }
}
