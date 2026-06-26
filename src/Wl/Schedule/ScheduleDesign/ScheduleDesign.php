<?php

namespace WlSdk\Wl\Schedule\ScheduleDesign;

use WlSdk\WlSdkClient;

/**
 * This method is called to process GET query.
 */
class ScheduleDesign
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * This method is called to process GET query.
     *
     * @return ScheduleDesignGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ScheduleDesignGetRequest $request): ScheduleDesignGetResponse
    {
        return new ScheduleDesignGetResponse($this->client->request('/Wl/Schedule/ScheduleDesign/ScheduleDesign.json', $request->params(), 'GET'));
    }

    /**
     * Saves schedule design settings including schedule config settings.
     *
     * @return ScheduleDesignPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ScheduleDesignPostRequest $request): ScheduleDesignPostResponse
    {
        return new ScheduleDesignPostResponse($this->client->request('/Wl/Schedule/ScheduleDesign/ScheduleDesign.json', $request->params(), 'POST'));
    }
}
