<?php

namespace WlSdk\Wl\Login\Search\QuickCheckIn;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Login/Search/QuickCheckIn/QuickCheckIn.json
 */
class QuickCheckIn
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Login/Search/QuickCheckIn/QuickCheckIn.json.
     *
     * @return QuickCheckInGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(QuickCheckInGetRequest $request): QuickCheckInGetResponse
    {
        return new QuickCheckInGetResponse($this->client->request('/Wl/Login/Search/QuickCheckIn/QuickCheckIn.json', $request->params(), 'GET'));
    }
}
