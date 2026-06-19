<?php
namespace WlSdk\Wl\Appointment\Book\Schedule;

use WlSdk\WlSdkClient;

/**
 * Finds and returns the next available date for appointment booking starting from the given date.
 */
class NextAvailableDayGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Finds and returns the next available date for appointment booking starting from the given date.
     *
     * Searches forward from the specified start date until it finds a day with at least one available
     *  time slot for the given service, location, and optional staff member. Returns the first available
     *  date so the client side can pre-select it in the booking calendar. This request may take longer
     *  than usual on production and uses an extended execution time limit.
     *
     * @return NextAvailableDayGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(NextAvailableDayGetRequest $request): NextAvailableDayGetResponse
    {
        return new NextAvailableDayGetResponse($this->client->request('/Wl/Appointment/Book/Schedule/NextAvailableDay.json', $request->params(), 'GET'));
    }
}
