<?php
namespace WlSdk\Wl\Book\Process\Resource;

use WlSdk\WlSdkClient;

/**
 * Returns the list of available assets for the booking session, grouped by asset category.
 *
 * @deprecated
 */
class ResourceGet
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
     * @return ResourceGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ResourceGetRequest $request): ResourceGetResponse
    {
        return new ResourceGetResponse($this->client->request('/Wl/Book/Process/Resource/Resource.json', $request->params(), 'GET'));
    }
}
