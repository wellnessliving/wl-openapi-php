<?php
namespace WlSdk\Wl\Classes\ClassList;

use WlSdk\WlSdkClient;

/**
 * Gets a list of classes which take place in the specified location.
 */
class BookListGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets a list of classes which take place in the specified location.
     *
     * Used to build the booking page for a location, displaying all classes that clients can sign up for.
     * Returns the full class details needed for display: schedules, assigned staff, booking links, pricing,
     * and category tabs.
     *
     * @return BookListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(BookListGetRequest $request): BookListGetResponse
    {
        return new BookListGetResponse($this->client->request('/Wl/Classes/ClassList/BookList.json', $request->params(), 'GET'));
    }
}
