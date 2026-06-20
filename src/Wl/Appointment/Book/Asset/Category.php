<?php

namespace WlSdk\Wl\Appointment\Book\Asset;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list of information about asset categories for the appointment booking page.
 */
class Category
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves a list of information about asset categories for the appointment booking page.
     *
     * Returns all asset categories available at the given location, optionally filtered by book now tab.
     *  Each category includes its title and a flag indicating whether all its assets are hidden in
     *  the White Label mobile application. Supports both frontend and backend modes.
     *
     * @return CategoryGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CategoryGetRequest $request): CategoryGetResponse
    {
        return new CategoryGetResponse($this->client->request('/Wl/Appointment/Book/Asset/Category.json', $request->params(), 'GET'));
    }
}
