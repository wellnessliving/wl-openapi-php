<?php
namespace WlSdk\Wl\Book\Process\Resource;

use WlSdk\WlSdkClient;

/**
 * Returns the list of available assets for the booking session, grouped by asset category.
 */
class Resource
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the list of available assets for the booking session, grouped by asset category.
     *
     * Loads all asset categories and their items available for the given class period or selected sessions,
     * strips shared resources that clients should not choose individually, attaches image data and occupancy
     * information, and returns the result as `a_resource_all`.
     *
     * @deprecated
     *
     * @return ResourceGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ResourceGetRequest $request): ResourceGetResponse
    {
        return new ResourceGetResponse($this->client->request('/Wl/Book/Process/Resource/Resource.json', $request->params(), 'GET'));
    }

    /**
     * Saves the asset selection for the booking and attempts to book the session if no further steps are required.
     *
     * Validates and stores the selected assets and session data in the booking process context, then, when no quiz
     * step is needed and payment is not required, attempts to complete the booking immediately. Returns visit
     * keys,
     * activity keys, and a flag indicating whether further wizard steps are needed.
     *
     * @deprecated
     *
     * @return ResourcePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ResourcePostRequest $request): ResourcePostResponse
    {
        return new ResourcePostResponse($this->client->request('/Wl/Book/Process/Resource/Resource.json', $request->params(), 'POST'));
    }
}
