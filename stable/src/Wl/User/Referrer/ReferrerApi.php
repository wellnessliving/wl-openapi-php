<?php
namespace WlSdk\Wl\User\Referrer;

use WlSdk\WlSdkClient;

/**
 * Searches for a referrer by the given search string and returns their profile information.
 */
class ReferrerApi
{
    /**
     * The key of the current business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The string to be used for searching for a referrer.
     *
     * @var string|null
     */
    public ?string $s_search = null;

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
     * @return ReferrerApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): ReferrerApiGetResponse
    {
        return new ReferrerApiGetResponse($this->client->request('/Wl/User/Referrer/Referrer.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            's_search' => $this->s_search,
            ],
            static fn($v) => $v !== null
        );
    }
}
