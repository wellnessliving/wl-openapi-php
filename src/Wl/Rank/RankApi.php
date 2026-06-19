<?php
namespace WlSdk\Wl\Rank;

use WlSdk\WlSdkClient;

/**
 * Gets belts list of a business.
 */
class RankApi
{
    /**
     * Rank category keys. Used to filter belts by belt categories.
     *
     * @var string[]|null
     */
    public ?array $a_rank_category = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets belts list of a business.
     *
     * Returns all belts for the specified business, optionally filtered by belt category keys, including each
     * belt's
     * title and its parent category title.
     *
     * @return RankApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): RankApiGetResponse
    {
        return new RankApiGetResponse($this->client->request('/Wl/Rank/Rank.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'a_rank_category' => $this->a_rank_category,
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
