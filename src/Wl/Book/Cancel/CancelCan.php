<?php

namespace WlSdk\Wl\Book\Cancel;

use WlSdk\WlSdkClient;

/**
 * Returns information about whether the given user can cancel the booking and the expected consequences.
 */
class CancelCan
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns information about whether the given user can cancel the booking and the expected consequences.
     *
     * Accepts a business key and a visit key, validates access, and performs a dry-run cancellation to determine
     * whether the visit can be cancelled online, whether a late-cancel penalty applies, and whether the purchase
     * option credit would be refunded.
     *
     * @return CancelCanGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CancelCanGetRequest $request): CancelCanGetResponse
    {
        return new CancelCanGetResponse($this->client->request('/Wl/Book/Cancel/CancelCan.json', $request->params(), 'GET'));
    }
}
