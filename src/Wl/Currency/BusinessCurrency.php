<?php

namespace WlSdk\Wl\Currency;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about currencies.
 */
class BusinessCurrency
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about currencies.
     *
     * @return BusinessCurrencyGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(BusinessCurrencyGetRequest $request): BusinessCurrencyGetResponse
    {
        return new BusinessCurrencyGetResponse($this->client->request('/Wl/Currency/BusinessCurrency.json', $request->params(), 'GET'));
    }
}
