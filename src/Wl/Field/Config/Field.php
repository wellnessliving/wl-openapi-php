<?php

namespace WlSdk\Wl\Field\Config;

use WlSdk\WlSdkClient;

/**
 * Fetch field information.
 */
class Field
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Fetch field information.
     *
     * @return FieldGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(FieldGetRequest $request): FieldGetResponse
    {
        return new FieldGetResponse($this->client->request('/Wl/Field/Config/Field.json', $request->params(), 'GET'));
    }

    /**
     * Creates or updates field.
     *
     * @return FieldPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(FieldPostRequest $request): FieldPostResponse
    {
        return new FieldPostResponse($this->client->request('/Wl/Field/Config/Field.json', $request->params(), 'POST'));
    }

    /**
     * Remove field.
     *
     * @return FieldDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(FieldDeleteRequest $request): FieldDeleteResponse
    {
        return new FieldDeleteResponse($this->client->request('/Wl/Field/Config/Field.json', $request->params(), 'DELETE'));
    }
}
