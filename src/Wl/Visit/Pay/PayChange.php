<?php

namespace WlSdk\Wl\Visit\Pay;

use WlSdk\WlSdkClient;

/**
 * Returns data to change visit pay option.
 */
class PayChange
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns data to change visit pay option.
     *
     * @return PayChangeGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PayChangeGetRequest $request): PayChangeGetResponse
    {
        return new PayChangeGetResponse($this->client->request('/Wl/Visit/Pay/PayChange.json', $request->params(), 'GET'));
    }

    /**
     * Saves user's promotion for certain attendance.
     *
     * @return PayChangePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PayChangePostRequest $request): PayChangePostResponse
    {
        return new PayChangePostResponse($this->client->request('/Wl/Visit/Pay/PayChange.json', $request->params(), 'POST'));
    }
}
