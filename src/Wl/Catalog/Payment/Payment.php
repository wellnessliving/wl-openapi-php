<?php

namespace WlSdk\Wl\Catalog\Payment;

use WlSdk\WlSdkClient;

/**
 * Allows to pay items for the client.
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
     * Allows to pay items for the client.
     *
     * The checkout endpoint that finalizes a purchase in the client-facing store. Charges the client's
     * selected payment method, applies any discounts and tips, and creates the purchase record. Returns
     * the resulting purchase key so the frontend can redirect to the confirmation page, and the temporary token of
     * the
     * receipt, which lets an anonymous user, who has no access to the purchase, view the receipt. For an anonymous
     * user ({@link \WlSdk\Wl\Catalog\Payment\Payment}) the session also remembers the purchase, so that user can
     * ask for the
     * emails of the purchase afterwards.
     *
     * @return PaymentPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PaymentPostRequest $request): PaymentPostResponse
    {
        return new PaymentPostResponse($this->client->request('/Wl/Catalog/Payment/Payment.json', $request->params(), 'POST'));
    }
}
