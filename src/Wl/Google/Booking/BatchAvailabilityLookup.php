<?php

namespace WlSdk\Wl\Google\Booking;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Google/Booking/BatchAvailabilityLookup.json
 */
class BatchAvailabilityLookup
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Google/Booking/BatchAvailabilityLookup.json.
     *
     * @return BatchAvailabilityLookupPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(BatchAvailabilityLookupPostRequest $request): BatchAvailabilityLookupPostResponse
    {
        return new BatchAvailabilityLookupPostResponse($this->client->request('/Wl/Google/Booking/BatchAvailabilityLookup.json', $request->params(), 'POST'));
    }
}
