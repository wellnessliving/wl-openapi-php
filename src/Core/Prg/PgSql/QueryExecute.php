<?php

namespace WlSdk\Core\Prg\PgSql;

use WlSdk\WlSdkClient;

/**
 * This method is called to process POST query.
 */
class QueryExecute
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * This method is called to process POST query.
     *
     * @return QueryExecutePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(QueryExecutePostRequest $request): QueryExecutePostResponse
    {
        return new QueryExecutePostResponse($this->client->request('/Core/Prg/PgSql/QueryExecute.json', $request->params(), 'POST'));
    }
}
