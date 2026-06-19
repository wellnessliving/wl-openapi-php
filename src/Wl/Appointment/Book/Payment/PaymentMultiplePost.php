<?php
namespace WlSdk\Wl\Appointment\Book\Payment;

use WlSdk\WlSdkClient;

/**
 * Allows to pay an appointment or appointment purchase option for the client.
 */
class PaymentMultiplePost
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
