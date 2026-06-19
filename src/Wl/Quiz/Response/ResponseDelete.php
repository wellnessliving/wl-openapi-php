<?php
namespace WlSdk\Wl\Quiz\Response;

use WlSdk\WlSdkClient;

/**
 * Deletes the specified quiz response or list of responses for the given business.
 *
 * @deprecated
 */
class ResponseDelete
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
     * @return ResponseDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(ResponseDeleteRequest $request): ResponseDeleteResponse
    {
        return new ResponseDeleteResponse($this->client->request('/Wl/Quiz/Response/Response.json', $request->params(), 'DELETE'));
    }
}
