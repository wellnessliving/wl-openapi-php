<?php

namespace WlSdk\Wl\Staff\PayRate;

use WlSdk\WlSdkClient;

/**
 * Copies exists staff pay rates to the staff profile.
 */
class Copy
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Copies exists staff pay rates to the staff profile.
     *
     * @return CopyPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(CopyPostRequest $request): CopyPostResponse
    {
        return new CopyPostResponse($this->client->request('/Wl/Staff/PayRate/Copy.json', $request->params(), 'POST'));
    }
}
