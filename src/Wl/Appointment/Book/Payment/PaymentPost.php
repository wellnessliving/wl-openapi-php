<?php
namespace WlSdk\Wl\Appointment\Book\Payment;

use WlSdk\WlSdkClient;

/**
 * Allows to pay an appointment or appointment purchase option for the client.
 *
 * @deprecated
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
     * Allows to pay an appointment or appointment purchase option for the client.
     *
     * Accepts payment method and booking data, charges the client for the appointment or the selected
     *  Purchase Option, and records the transaction. Requires the client to be authenticated and the
     *  booking data to include a valid service or asset key.
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
