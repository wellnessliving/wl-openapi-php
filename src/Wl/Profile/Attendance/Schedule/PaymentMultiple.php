<?php

namespace WlSdk\Wl\Profile\Attendance\Schedule;

use WlSdk\WlSdkClient;

/**
 * Loads unpaid appointments data for the multiple payment panel.
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
     * Loads unpaid appointments data for the multiple payment panel.
     *
     * Loads unpaid appointments together with their addons, applicable purchase options, and
     *  purchase options already owned by the client. Appointments are loaded either for a client
     *  and their relatives on a specific day, or for an explicit list of appointments specified in
     *  {@link \WlSdk\Wl\Profile\Attendance\Schedule\PaymentMultiple}.
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
     * Applies purchase options and session passes already owned by the client to the selected
     *  visits. Redirects to the store cart or checkout page so the client can complete payment for
     *  any remaining unpaid addons or newly purchased purchase options.
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
