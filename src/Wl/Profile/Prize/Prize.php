<?php

namespace WlSdk\Wl\Profile\Prize;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list of prizes redeemed by user.
 */
class Prize
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves a list of prizes redeemed by user.
     *
     * @return PrizeGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PrizeGetRequest $request): PrizeGetResponse
    {
        return new PrizeGetResponse($this->client->request('/Wl/Profile/Prize/Prize.json', $request->params(), 'GET'));
    }
}
