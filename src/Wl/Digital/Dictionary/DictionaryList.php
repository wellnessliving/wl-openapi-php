<?php

namespace WlSdk\Wl\Digital\Dictionary;

use WlSdk\WlSdkClient;

/**
 * Returns list of words, which can mark that product is digital.
 */
class DictionaryList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns list of words, which can mark that product is digital.
     *
     * @return DictionaryListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(DictionaryListGetRequest $request): DictionaryListGetResponse
    {
        return new DictionaryListGetResponse($this->client->request('/Wl/Digital/Dictionary/DictionaryList.json', $request->params(), 'GET'));
    }
}
