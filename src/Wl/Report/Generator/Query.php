<?php

namespace WlSdk\Wl\Report\Generator;

use WlSdk\WlSdkClient;

/**
 * Returns contents of a report as a table.
 */
class Query
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns contents of a report as a table.
     *
     * If the report is not yet generated, it gets generated.
     * If the report is being generated now, partial content may be returned.
     *
     * @return QueryPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(QueryPostRequest $request): QueryPostResponse
    {
        return new QueryPostResponse($this->client->request('/Wl/Report/Generator/Query.json', $request->params(), 'POST'));
    }
}
