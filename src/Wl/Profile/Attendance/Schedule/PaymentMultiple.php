<?php

namespace WlSdk\Wl\Profile\Attendance\Schedule;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Profile/Attendance/Schedule/PaymentMultiple.json
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
     * Calls GET /Wl/Profile/Attendance/Schedule/PaymentMultiple.json.
     *
     * @return PaymentMultipleGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PaymentMultipleGetRequest $request): PaymentMultipleGetResponse
    {
        return new PaymentMultipleGetResponse($this->client->request('/Wl/Profile/Attendance/Schedule/PaymentMultiple.json', $request->params(), 'GET'));
    }

    /**
     * Applies existing purchase options for appointments pay and generates a link for payment in the store.
     *
     * @return PaymentMultiplePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PaymentMultiplePostRequest $request): PaymentMultiplePostResponse
    {
        return new PaymentMultiplePostResponse($this->client->request('/Wl/Profile/Attendance/Schedule/PaymentMultiple.json', $request->params(), 'POST'));
    }
}
