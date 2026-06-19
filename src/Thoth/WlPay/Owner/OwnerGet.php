<?php
namespace WlSdk\Thoth\WlPay\Owner;

use WlSdk\WlSdkClient;

/**
 * Returns information about payment owner.
 */
class OwnerGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns information about payment owner.
     *
     * @return OwnerGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(OwnerGetRequest $request): OwnerGetResponse
    {
        return new OwnerGetResponse($this->client->request('/Thoth/WlPay/Owner/Owner.json', $request->params(), 'GET'));
    }
}
