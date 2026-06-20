<?php

namespace WlSdk\Wl\Appointment\Book\Payment;

use WlSdk\WlSdkClient;

/**
 * Calculates pricing information for an appointment booking, including taxes, discounts, surcharges, and totals.
 */
class PaymentPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calculates pricing information for an appointment booking, including taxes, discounts, surcharges, and totals.
     *
     * Returns the full breakdown of amounts owed for the booking, including available Purchase Options,
     *  applicable discount codes, surcharge amounts, and the final total. Intended to be called before
     *  submitting payment so the client side can display a pricing summary to the user.
     *
     * @return PaymentPostGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PaymentPostGetRequest $request): PaymentPostGetResponse
    {
        return new PaymentPostGetResponse($this->client->request('/Wl/Appointment/Book/Payment/PaymentPost.json', $request->params(), 'GET'));
    }

    /**
     * Allows to pay an appointment or appointment purchase option for the client.
     *
     * Accepts payment method and booking data, charges the client for the appointment or the selected
     *  Purchase Option, and records the transaction. Requires the client to be authenticated and the
     *  booking data to include a valid service or asset key.
     *
     * @return PaymentPostPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PaymentPostPostRequest $request): PaymentPostPostResponse
    {
        return new PaymentPostPostResponse($this->client->request('/Wl/Appointment/Book/Payment/PaymentPost.json', $request->params(), 'POST'));
    }
}
