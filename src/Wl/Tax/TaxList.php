<?php
namespace WlSdk\Wl\Tax;

use WlSdk\WlSdkClient;

/**
 * Returns taxes of the specified business.
 */
class TaxList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns taxes of the specified business.
     *
     * Returns all active taxes configured for the business, including each tax's title, rate,
     * and type. Used to populate tax pickers when creating products, promotions, or invoices.
     *
     * @return TaxListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(TaxListGetRequest $request): TaxListGetResponse
    {
        return new TaxListGetResponse($this->client->request('/Wl/Tax/TaxList.json', $request->params(), 'GET'));
    }
}
