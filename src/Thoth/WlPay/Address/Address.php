<?php
namespace WlSdk\Thoth\WlPay\Address;

use WlSdk\WlSdkClient;

/**
 * Gets user's payment addresses information.
 */
class Address
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets user's payment addresses information.
     *
     * @return AddressGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AddressGetRequest $request): AddressGetResponse
    {
        return new AddressGetResponse($this->client->request('/Thoth/WlPay/Address/Address.json', $request->params(), 'GET'));
    }
}
