<?php
namespace WlSdk\Wl\Login\Promotion\Convert;

use WlSdk\WlSdkClient;

/**
 * Returns the current conversion configuration and the list of promotions available to convert to.
 */
class ConvertGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the current conversion configuration and the list of promotions available to convert to.
     *
     * Returns the current conversion type, scheduled date, target promotion, hold period dates, next payment date,
     * expiration date, and the list of promotions available as conversion targets for the given purchased
     * promotion.
     *
     * @return ConvertGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ConvertGetRequest $request): ConvertGetResponse
    {
        return new ConvertGetResponse($this->client->request('/Wl/Login/Promotion/Convert/Convert.json', $request->params(), 'GET'));
    }
}
