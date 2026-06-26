<?php

namespace WlSdk\Wl\Staff;

use WlSdk\WlSdkClient;

/**
 * Updates the state of "Show past dates" toggle in staff's profile's working hours tab.
 */
class StaffPastWorkTimeOption
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Updates the state of "Show past dates" toggle in staff's profile's working hours tab.
     *
     * @return StaffPastWorkTimeOptionPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(StaffPastWorkTimeOptionPostRequest $request): StaffPastWorkTimeOptionPostResponse
    {
        return new StaffPastWorkTimeOptionPostResponse($this->client->request('/Wl/Staff/StaffPastWorkTimeOption.json', $request->params(), 'POST'));
    }
}
