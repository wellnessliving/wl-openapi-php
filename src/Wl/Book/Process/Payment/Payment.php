<?php

namespace WlSdk\Wl\Book\Process\Payment;

use WlSdk\WlSdkClient;

/**
 * Processes purchases and books sessions on the "Pay/Billing info" step of the booking wizard.
 */
class Payment
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Processes purchases and books sessions on the "Pay/Billing info" step of the booking wizard.
     *
     * Accepts the selected purchase items, payment form, optional discount code, and installment template, then
     * collects payment, applies discounts and prizes, and creates the booking records. Returns visit keys,
     * activity
     * keys, and purchase activity key upon success.
     *
     * @return PaymentPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PaymentPostRequest $request): PaymentPostResponse
    {
        return new PaymentPostResponse($this->client->request('/Wl/Book/Process/Payment/Payment.json', $request->params(), 'POST'));
    }
}
