<?php
namespace WlSdk\Wl\Member\Progress\Log\Compare;

use WlSdk\WlSdkClient;

/**
 * Returns list of dates where client logged his progress.
 */
class CompareApi
{
    /**
     * Key of business to get information for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User key to search dates for.
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
     * Returns list of dates where client logged his progress.
     *
     * Retrieves all distinct dates on which the given user recorded progress entries for the business, excluding
     * the most recent date (since it cannot be compared with itself). Returns an empty array when fewer than two
     * entries exist.
     *
     * @return CompareApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): CompareApiGetResponse
    {
        return new CompareApiGetResponse($this->client->request('/Wl/Member/Progress/Log/Compare/Compare.json', $this->params(), 'GET'));
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
