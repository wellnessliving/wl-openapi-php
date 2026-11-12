<?php

namespace WlSdk\Wl\Visit\Kiosk;

use WlSdk\WlSdkClient;

/**
 * Checks the client in for a gym visit at the staff check-in kiosk.
 */
class Attend
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks the client in for a gym visit at the staff check-in kiosk.
     *
     * Works in the session of a staff member with access to the location and the privilege to see the profile of
     * the
     * client; no key of a kiosk is needed. The visit is checked in from the source "Kiosk". A client is checked in
     * for
     * a gym visit once a day: a second check-in on the same local day, at any location of the business, is refused
     * and nothing is written. A booked gym visit of the day at the location of the kiosk is checked in. A refusal
     * gives its reason, its message and the key of the failed attempt; a refusal for a negative balance does not
     * show the amount to a staff member who may not see the balances of the clients.
     *
     * @return AttendPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AttendPostRequest $request): AttendPostResponse
    {
        return new AttendPostResponse($this->client->request('/Wl/Visit/Kiosk/Attend.json', $request->params(), 'POST'));
    }
}
