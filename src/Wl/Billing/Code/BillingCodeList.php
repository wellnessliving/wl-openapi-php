<?php

namespace WlSdk\Wl\Billing\Code;

use WlSdk\WlSdkClient;

/**
 * Gets the billing code list of the business.
 */
class BillingCodeList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets the billing code list of the business.
     *
     * The list contains the custom codes of the business and the diagnostic codes of the read-only ICD-10-CM
     * reference library, the descriptions of the latter in the language of the request. The diagnostic codes are
     * returned only if the business has turned on ICD diagnostic codes.
     *
     * @return BillingCodeListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(BillingCodeListGetRequest $request): BillingCodeListGetResponse
    {
        return new BillingCodeListGetResponse($this->client->request('/Wl/Billing/Code/BillingCodeList.json', $request->params(), 'GET'));
    }
}
