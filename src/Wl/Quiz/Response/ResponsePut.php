<?php
namespace WlSdk\Wl\Quiz\Response;

use WlSdk\WlSdkClient;

/**
 * Validates, updates and reindex response information for associated user.
 *
 * @deprecated
 */
class ResponsePut
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Validates, updates and reindex response information for associated user.
     *
     * Used to amend an already-submitted response, for example when a business allows clients to
     * edit their quiz answers after submission. Re-links the response to its owner and triggers
     * downstream reindexing so search and reporting stay consistent.
     *
     * @return ResponsePutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(ResponsePutRequest $request): ResponsePutResponse
    {
        return new ResponsePutResponse($this->client->request('/Wl/Quiz/Response/Response.json', $request->params(), 'PUT'));
    }
}
