<?php
namespace WlSdk\Wl\Quiz\Response;

use WlSdk\WlSdkClient;

/**
 * Validates, updates and reindex response information for associated user.
 */
class Response65Put
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
     * @return Response65PutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(Response65PutRequest $request): Response65PutResponse
    {
        return new Response65PutResponse($this->client->request('/Wl/Quiz/Response/Response65.json', $request->params(), 'PUT'));
    }
}
