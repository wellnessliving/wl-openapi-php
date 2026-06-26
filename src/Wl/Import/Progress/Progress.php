<?php

namespace WlSdk\Wl\Import\Progress;

use WlSdk\WlSdkClient;

/**
 * Designed to notify about import progress.
 */
class Progress
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Designed to notify about import progress.
     *
     * @return ProgressGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ProgressGetRequest $request): ProgressGetResponse
    {
        return new ProgressGetResponse($this->client->request('/Wl/Import/Progress/Progress.json', $request->params(), 'GET'));
    }
}
