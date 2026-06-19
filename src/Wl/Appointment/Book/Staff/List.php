<?php
namespace WlSdk\Wl\Appointment\Book\Staff;

use WlSdk\WlSdkClient;

/**
 * Retrieves an information about staff members for the current service.
 */
class List
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves an information about staff members for the current service.
     *
     * Returns the list of staff members who can perform the specified service at the given location
     *  on the specified date and time. Each entry includes the staff member's name, image, gender,
     *  and availability. An 'any staff' option is included when the service allows random staff assignment.
     *
     * @return ListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ListGetRequest $request): ListGetResponse
    {
        return new ListGetResponse($this->client->request('/Wl/Appointment/Book/Staff/List.json', $request->params(), 'GET'));
    }
}
