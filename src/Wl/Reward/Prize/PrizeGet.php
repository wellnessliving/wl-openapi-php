<?php
namespace WlSdk\Wl\Reward\Prize;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list of redeemable prizes.
 */
class PrizeGet
{
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
     * @return PrizeGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PrizeGetRequest $request): PrizeGetResponse
    {
        return new PrizeGetResponse($this->client->request('/Wl/Reward/Prize/Prize.json', $request->params(), 'GET'));
    }
}
