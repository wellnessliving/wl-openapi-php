<?php

namespace WlSdk\Wl\Staff\Edit;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Staff/Edit/ActiveServices.json
 */
class ActiveServices
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Staff/Edit/ActiveServices.json.
     *
     * @return ActiveServicesGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ActiveServicesGetRequest $request): ActiveServicesGetResponse
    {
        return new ActiveServicesGetResponse($this->client->request('/Wl/Staff/Edit/ActiveServices.json', $request->params(), 'GET'));
    }
}
