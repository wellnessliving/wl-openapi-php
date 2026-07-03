<?php

namespace WlSdk\Wl\Report;

use WlSdk\WlSdkClient;

/**
 * Checks access to given report.
 */
class Access
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks access to given report.
     *
     * Accepts either {@link \WlSdk\Wl\Report\Access} (first-generation reports) or {@link \WlSdk\Wl\Report\Access}
     * (second-generation reports), but not both,
     * and returns `has_access` indicating whether the current user may view the report in the given business.
     *
     * @return AccessGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AccessGetRequest $request): AccessGetResponse
    {
        return new AccessGetResponse($this->client->request('/Wl/Report/Access.json', $request->params(), 'GET'));
    }
}
