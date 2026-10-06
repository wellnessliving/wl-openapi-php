<?php

namespace WlSdk\Wl\Calendar\Cordova;

use WlSdk\WlSdkClient;

/**
 * Gets schedule for calendar synchronisation.
 */
class CordovaCalendarStaff
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets schedule for calendar synchronisation.
     *
     * POST method is used instead GET because the `$s_visit_synced` field value
     * may be more than allowed for GET.
     *
     * @return CordovaCalendarStaffPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(CordovaCalendarStaffPostRequest $request): CordovaCalendarStaffPostResponse
    {
        return new CordovaCalendarStaffPostResponse($this->client->request('/Wl/Calendar/Cordova/CordovaCalendarStaff.json', $request->params(), 'POST'));
    }
}
