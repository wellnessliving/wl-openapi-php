<?php
namespace WlSdk\Wl\Appointment\Book\Service;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list of information about service categories on the appointment booking page.
 */
class CategoryGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves a list of information about service categories on the appointment booking page.
     *
     * Returns all service categories available at the given location, optionally filtered by book now tab.
     *  Each category includes its title and the list of available services. Supports both frontend and
     *  backend modes; in backend mode access is verified against the business.
     *
     * @return CategoryGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CategoryGetRequest $request): CategoryGetResponse
    {
        return new CategoryGetResponse($this->client->request('/Wl/Appointment/Book/Service/Category.json', $request->params(), 'GET'));
    }
}
