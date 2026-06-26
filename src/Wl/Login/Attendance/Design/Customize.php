<?php

namespace WlSdk\Wl\Login\Attendance\Design;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Login/Attendance/Design/Customize.json
 */
class Customize
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Login/Attendance/Design/Customize.json.
     *
     * @return CustomizeGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CustomizeGetRequest $request): CustomizeGetResponse
    {
        return new CustomizeGetResponse($this->client->request('/Wl/Login/Attendance/Design/Customize.json', $request->params(), 'GET'));
    }

    /**
     * Calls POST /Wl/Login/Attendance/Design/Customize.json.
     *
     * @return CustomizePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(CustomizePostRequest $request): CustomizePostResponse
    {
        return new CustomizePostResponse($this->client->request('/Wl/Login/Attendance/Design/Customize.json', $request->params(), 'POST'));
    }
}
