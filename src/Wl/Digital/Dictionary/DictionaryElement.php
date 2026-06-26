<?php

namespace WlSdk\Wl\Digital\Dictionary;

use WlSdk\WlSdkClient;

/**
 * Returns word value.
 */
class DictionaryElement
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns word value.
     *
     * @return DictionaryElementGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(DictionaryElementGetRequest $request): DictionaryElementGetResponse
    {
        return new DictionaryElementGetResponse($this->client->request('/Wl/Digital/Dictionary/DictionaryElement.json', $request->params(), 'GET'));
    }

    /**
     * Updates and adds word value.
     *
     * @return DictionaryElementPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(DictionaryElementPostRequest $request): DictionaryElementPostResponse
    {
        return new DictionaryElementPostResponse($this->client->request('/Wl/Digital/Dictionary/DictionaryElement.json', $request->params(), 'POST'));
    }

    /**
     * Deletes word.
     *
     * @return DictionaryElementDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(DictionaryElementDeleteRequest $request): DictionaryElementDeleteResponse
    {
        return new DictionaryElementDeleteResponse($this->client->request('/Wl/Digital/Dictionary/DictionaryElement.json', $request->params(), 'DELETE'));
    }
}
