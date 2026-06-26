<?php

namespace WlSdk\Wl\Import\Application;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Import/Application/ImportAbstract.json
 */
class ImportAbstract
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Import/Application/ImportAbstract.json.
     *
     * @return ImportAbstractPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ImportAbstractPostRequest $request): ImportAbstractPostResponse
    {
        return new ImportAbstractPostResponse($this->client->request('/Wl/Import/Application/ImportAbstract.json', $request->params(), 'POST'));
    }
}
