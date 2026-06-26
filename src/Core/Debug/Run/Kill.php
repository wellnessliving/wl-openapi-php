<?php

namespace WlSdk\Core\Debug\Run;

use WlSdk\WlSdkClient;

/**
 * Sends signal to exit to specified processes.
 */
class Kill
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Sends signal to exit to specified processes.
     *
     * @return KillDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(KillDeleteRequest $request): KillDeleteResponse
    {
        return new KillDeleteResponse($this->client->request('/Core/Debug/Run/Kill.json', $request->params(), 'DELETE'));
    }
}
