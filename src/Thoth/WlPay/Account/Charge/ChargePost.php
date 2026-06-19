<?php
namespace WlSdk\Thoth\WlPay\Account\Charge;

use WlSdk\WlSdkClient;

/**
 * Allows the user account to be filled with a specified payment, or to perform the reset change manually.
 */
class ChargePost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Allows the user account to be filled with a specified payment, or to perform the reset change manually.
     *
     * @return ChargePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ChargePostRequest $request): ChargePostResponse
    {
        return new ChargePostResponse($this->client->request('/Thoth/WlPay/Account/Charge/Charge.json', $request->params(), 'POST'));
    }
}
