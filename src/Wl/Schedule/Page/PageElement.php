<?php

namespace WlSdk\Wl\Schedule\Page;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about one element of schedule.
 */
class PageElement
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about one element of schedule.
     *
     * Returns full details for a single visit, including staff, location, timing, assigned assets,
     * virtual join URL, and class-specific or appointment-specific information. Used to render the
     * visit detail page in the client's schedule view.
     *
     * @return PageElementGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PageElementGetRequest $request): PageElementGetResponse
    {
        return new PageElementGetResponse($this->client->request('/Wl/Schedule/Page/PageElement.json', $request->params(), 'GET'));
    }
}
