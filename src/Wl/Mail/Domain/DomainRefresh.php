<?php

namespace WlSdk\Wl\Mail\Domain;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Mail/Domain/DomainRefresh.json
 */
class DomainRefresh
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Mail/Domain/DomainRefresh.json.
     *
     * @return DomainRefreshPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(DomainRefreshPostRequest $request): DomainRefreshPostResponse
    {
        return new DomainRefreshPostResponse($this->client->request('/Wl/Mail/Domain/DomainRefresh.json', $request->params(), 'POST'));
    }
}
