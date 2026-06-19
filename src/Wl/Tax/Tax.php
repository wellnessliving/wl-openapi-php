<?php
namespace WlSdk\Wl\Tax;

use WlSdk\WlSdkClient;

/**
 * Returns the title for the specified tax.
 */
class Tax
{
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
     * @return TaxGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(TaxGetRequest $request): TaxGetResponse
    {
        return new TaxGetResponse($this->client->request('/Wl/Tax/Tax.json', $request->params(), 'GET'));
    }
}
