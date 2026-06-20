<?php

namespace WlSdk\Wl\Login\Member\DynamicId;

use WlSdk\WlSdkClient;

/**
 * Returns the member's barcode and its expiry time for the specified business and user.
 */
class DynamicId
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the member's barcode and its expiry time for the specified business and user.
     *
     * If the business uses dynamic barcodes, generates or refreshes a time-limited barcode and returns its value,
     * expiry countdown, and an image URL. If the business uses static barcodes, returns the member's static ID
     * with a zero expiry.
     *
     * @return DynamicIdGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(DynamicIdGetRequest $request): DynamicIdGetResponse
    {
        return new DynamicIdGetResponse($this->client->request('/Wl/Login/Member/DynamicId/DynamicId.json', $request->params(), 'GET'));
    }
}
