<?php
namespace WlSdk\Wl\Reward\Prize;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list of redeemable prizes.
 */
class PrizeApi
{
    /**
     * Key of current business.
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
     * Retrieves a list of redeemable prizes.
     *
     * Returns all active redeemable prizes for the specified business, ordered by point cost, including the prize
     * key
     * and required score for each item.
     *
     * @return PrizeApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): PrizeApiGetResponse
    {
        return new PrizeApiGetResponse($this->client->request('/Wl/Reward/Prize/Prize.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
