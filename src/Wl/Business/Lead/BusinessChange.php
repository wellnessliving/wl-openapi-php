<?php

namespace WlSdk\Wl\Business\Lead;

use WlSdk\WlSdkClient;

/**
 * Saves changes to referrer or referral business for a business lead request within partner program.
 */
class BusinessChange
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves changes to referrer or referral business for a business lead request within partner program.
     *
     * @return BusinessChangePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(BusinessChangePostRequest $request): BusinessChangePostResponse
    {
        return new BusinessChangePostResponse($this->client->request('/Wl/Business/Lead/BusinessChange.json', $request->params(), 'POST'));
    }
}
