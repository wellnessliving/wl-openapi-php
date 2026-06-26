<?php

namespace WlSdk\Wl\Integration\Zoom;

use WlSdk\WlSdkClient;

/**
 * Sends email about paid account connection.
 */
class Confirmation
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Sends email about paid account connection.
     *
     * @return ConfirmationPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ConfirmationPostRequest $request): ConfirmationPostResponse
    {
        return new ConfirmationPostResponse($this->client->request('/Wl/Integration/Zoom/Confirmation.json', $request->params(), 'POST'));
    }
}
