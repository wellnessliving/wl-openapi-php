<?php

namespace WlSdk\Wl\Business\NameList;

use WlSdk\WlSdkClient;

/**
 * Retrieves names for given business keys.
 */
class NameList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves names for given business keys.
     *
     * @return NameListPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(NameListPostRequest $request): NameListPostResponse
    {
        return new NameListPostResponse($this->client->request('/Wl/Business/NameList/NameList.json', $request->params(), 'POST'));
    }
}
