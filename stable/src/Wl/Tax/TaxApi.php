<?php
namespace WlSdk\Wl\Tax;

use WlSdk\WlSdkClient;

/**
 * Returns the title for the specified tax.
 */
class TaxApi
{
    /**
     * The tax key to get information for.
     *
     * @var string|null
     */
    public ?string $k_tax = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the title for the specified tax.
     *
     * Returns the human-readable display name for the given tax record. Throws if the tax
     * key is invalid or if the tax has been marked as removed.
     *
     * @return TaxApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): TaxApiGetResponse
    {
        return new TaxApiGetResponse($this->client->request('/Wl/Tax/Tax.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_tax' => $this->k_tax,
            ],
            static fn($v) => $v !== null
        );
    }
}
