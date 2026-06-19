<?php
namespace WlSdk\Wl\Quiz\Response;

use WlSdk\WlSdkClient;

/**
 * Deletes the specified quiz response or list of responses for the given business.
 */
class Response65Delete
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Deletes the specified quiz response or list of responses for the given business.
     *
     * Validates access privileges and removes the specified response records, updating any related search indexes
     * and activity logs.
     *
     * @return Response65DeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(Response65DeleteRequest $request): Response65DeleteResponse
    {
        return new Response65DeleteResponse($this->client->request('/Wl/Quiz/Response/Response65.json', $request->params(), 'DELETE'));
    }
}
