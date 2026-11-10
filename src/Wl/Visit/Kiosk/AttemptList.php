<?php

namespace WlSdk\Wl\Visit\Kiosk;

use WlSdk\WlSdkClient;

/**
 * Returns the gym check-ins and the failed gym check-in attempts of a local day at the location.
 */
class AttemptList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the gym check-ins and the failed gym check-in attempts of a local day at the location.
     *
     * The list holds the checked-in gym visits of the location and the failed gym check-in attempts at the
     * location,
     * made from every source (the kiosk, the backend, the self check-in and the others); the visits and the
     * attempts
     * of the classes and of the appointments are not listed. The newest attempt goes first, 100 attempts a page.
     * The totals count the whole day. The attempts of the clients whom the staff member may not see (the scope of
     * the
     * clients of the staff member) are neither listed nor counted. Works in the session of a staff member with
     * access
     * to the location and the privilege to see the profiles of the clients; no key of a kiosk is needed.
     *
     * @return AttemptListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AttemptListGetRequest $request): AttemptListGetResponse
    {
        return new AttemptListGetResponse($this->client->request('/Wl/Visit/Kiosk/AttemptList.json', $request->params(), 'GET'));
    }
}
