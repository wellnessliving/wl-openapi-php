<?php
namespace WlSdk\Wl\Reward\Score\Current;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about current score in wellnessliving points.
 */
class CurrentApi
{
    /**
     * ID of a business to show information for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * UID to retrieve information about.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about current score in wellnessliving points.
     *
     * Returns the user's current reward point balance, their rank in the first available leaderboard, and the
     * leaderboard title for the specified business.
     *
     * @return CurrentApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): CurrentApiGetResponse
    {
        return new CurrentApiGetResponse($this->client->request('/Wl/Reward/Score/Current/Current.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
