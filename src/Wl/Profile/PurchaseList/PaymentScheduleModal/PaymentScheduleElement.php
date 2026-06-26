<?php

namespace WlSdk\Wl\Profile\PurchaseList\PaymentScheduleModal;

use WlSdk\WlSdkClient;

/**
 * Return information about payment schedule.
 */
class PaymentScheduleElement
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Return information about payment schedule.
     *
     * @return PaymentScheduleElementGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PaymentScheduleElementGetRequest $request): PaymentScheduleElementGetResponse
    {
        return new PaymentScheduleElementGetResponse($this->client->request('/Wl/Profile/PurchaseList/PaymentScheduleModal/PaymentScheduleElement.json', $request->params(), 'GET'));
    }
}
