<?php
namespace WlSdk\Thoth\WlPay\Account\Charge;

use WlSdk\WlSdkClient;

/**
 * Refills the user account balance by the specified payment amount or adjusts it manually.
 */
class Charge
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Refills the user account balance by the specified payment amount or adjusts it manually.
     *
     * Accepts the payment amount, account key or user-and-business identifiers, charge mode, and payment form
     * data. Processes the payment through the configured payment environment and returns the purchase key
     * when a new purchase is created (for the automatic charge mode).
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
