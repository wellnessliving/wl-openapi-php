<?php

namespace WlSdk\Wl\Pay\Processor\StripeCom;

use WlSdk\WlSdkClient;

/**
 * Gets Stripe charge information.
 */
class StripeComCharge
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets Stripe charge information.
     *
     * Validates the business merchant and payer, retrieves the charge from Stripe by its charge id,
     * and returns the payment method used along with the payment method details captured at the time
     * of the transaction.
     *
     * @return StripeComChargeGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(StripeComChargeGetRequest $request): StripeComChargeGetResponse
    {
        return new StripeComChargeGetResponse($this->client->request('/Wl/Pay/Processor/StripeCom/StripeComCharge.json', $request->params(), 'GET'));
    }
}
