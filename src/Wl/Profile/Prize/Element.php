<?php

namespace WlSdk\Wl\Profile\Prize;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about prize item of user.
 */
class Element
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about prize item of user.
     *
     * @return ElementGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ElementGetRequest $request): ElementGetResponse
    {
        return new ElementGetResponse($this->client->request('/Wl/Profile/Prize/Element.json', $request->params(), 'GET'));
    }

    /**
     * Sets number of remaining prize quantity to 0.
     *
     * @return ElementPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ElementPostRequest $request): ElementPostResponse
    {
        return new ElementPostResponse($this->client->request('/Wl/Profile/Prize/Element.json', $request->params(), 'POST'));
    }
}
