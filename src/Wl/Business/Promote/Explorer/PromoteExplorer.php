<?php

namespace WlSdk\Wl\Business\Promote\Explorer;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Business/Promote/Explorer/PromoteExplorer.json
 */
class PromoteExplorer
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Business/Promote/Explorer/PromoteExplorer.json.
     *
     * @return PromoteExplorerPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PromoteExplorerPostRequest $request): PromoteExplorerPostResponse
    {
        return new PromoteExplorerPostResponse($this->client->request('/Wl/Business/Promote/Explorer/PromoteExplorer.json', $request->params(), 'POST'));
    }
}
