<?php

namespace WlSdk\Wl\Currency;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about currencies.
 */
class Currency
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
     * Queries all active (non-removed) currencies from the database and returns them as an associative array
     *  keyed by currency key, with each entry containing the currency sign, its display position, and the
     *  international currency code.
     *
     * @return CurrencyGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CurrencyGetRequest $request): CurrencyGetResponse
    {
        return new CurrencyGetResponse($this->client->request('/Wl/Currency/Currency.json', $request->params(), 'GET'));
    }
}
