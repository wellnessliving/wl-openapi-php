<?php
namespace WlSdk\Wl\Appointment\Book\Payment;

use WlSdk\WlSdkClient;

/**
 * Calculates pricing information for an appointment booking, including taxes, discounts, surcharges, and totals.
 */
class PaymentPostGet
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
}
