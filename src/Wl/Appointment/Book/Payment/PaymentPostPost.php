<?php
namespace WlSdk\Wl\Appointment\Book\Payment;

use WlSdk\WlSdkClient;

/**
 * Allows to pay an appointment or appointment purchase option for the client.
 */
class PaymentPostPost
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
     * @return PaymentPostPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PaymentPostPostRequest $request): PaymentPostPostResponse
    {
        return new PaymentPostPostResponse($this->client->request('/Wl/Appointment/Book/Payment/PaymentPost.json', $request->params(), 'POST'));
    }
}
