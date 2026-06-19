<?php
namespace WlSdk\Wl\Tax;

use WlSdk\WlSdkClient;

/**
 * Returns taxes of the specified business.
 */
class TaxListApi
{
    /**
     * The key of the business for which to get a list of taxes.
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
     * Returns taxes of the specified business.
     *
     * Returns all active taxes configured for the business, including each tax's title, rate,
     * and type. Used to populate tax pickers when creating products, promotions, or invoices.
     *
     * @return TaxListApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): TaxListApiGetResponse
    {
        return new TaxListApiGetResponse($this->client->request('/Wl/Tax/TaxList.json', $this->params(), 'GET'));
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
