<?php

namespace WlSdk\Wl\Appointment\Book\Payment;

use WlSdk\WlSdkClient;

/**
 * Calculates pricing information for a batch of appointment bookings, including taxes, discounts, surcharges, and
 * per-provider totals.
 */
class PaymentMultiple
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calculates pricing information for a batch of appointment bookings, including taxes, discounts, surcharges, and per-provider totals.
     *
     * Returns the full pricing breakdown for all providers specified in the booking data, including
     *  available Purchase Options, applicable discount codes, surcharge amounts, and the final total
     *  for each provider. Intended to be called before submitting payment so the client side can
     *  display a pricing summary.
     *
     * @return PaymentMultipleGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PaymentMultipleGetRequest $request): PaymentMultipleGetResponse
    {
        return new PaymentMultipleGetResponse($this->client->request('/Wl/Appointment/Book/Payment/PaymentMultiple.json', $request->params(), 'GET'));
    }

    /**
     * Allows to pay an appointment or appointment purchase option for the client.
     *
     * Accepts payment method and multi-provider booking data, charges the client for all appointments
     *  or selected Purchase Options in the batch, and records the transactions. Requires the client
     *  to be authenticated and each provider entry to include a valid service or asset key with date.
     *
     * @return PaymentMultiplePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PaymentMultiplePostRequest $request): PaymentMultiplePostResponse
    {
        return new PaymentMultiplePostResponse($this->client->request('/Wl/Appointment/Book/Payment/PaymentMultiple.json', $request->params(), 'POST'));
    }
}
