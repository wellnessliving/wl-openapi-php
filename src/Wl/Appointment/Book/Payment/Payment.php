<?php

namespace WlSdk\Wl\Appointment\Book\Payment;

use WlSdk\WlSdkClient;

/**
 * Calculates pricing information for an appointment booking, including taxes, discounts, surcharges, and totals.
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
     * Calculates pricing information for an appointment booking, including taxes, discounts, surcharges, and totals.
     *
     * Returns the full breakdown of amounts owed for the booking, including available Purchase Options,
     *  applicable discount codes, surcharge amounts, and the final total. Intended to be called before
     *  submitting payment so the client side can display a pricing summary to the user.
     *
     * @deprecated Use {@link \Wl\Appointment\Book\Payment\PaymentPostApi} instead.
     *
     * @return PaymentGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PaymentGetRequest $request): PaymentGetResponse
    {
        return new PaymentGetResponse($this->client->request('/Wl/Appointment/Book/Payment/Payment.json', $request->params(), 'GET'));
    }

    /**
     * Allows to pay an appointment or appointment purchase option for the client.
     *
     * Accepts payment method and booking data, charges the client for the appointment or the selected
     *  Purchase Option, and records the transaction. Requires the client to be authenticated and the
     *  booking data to include a valid service or asset key.
     *
     * @deprecated Use {@link \Wl\Appointment\Book\Payment\PaymentPostApi} instead.
     *
     * @return PaymentPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PaymentPostRequest $request): PaymentPostResponse
    {
        return new PaymentPostResponse($this->client->request('/Wl/Appointment/Book/Payment/Payment.json', $request->params(), 'POST'));
    }
}
