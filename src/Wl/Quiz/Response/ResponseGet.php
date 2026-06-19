<?php
namespace WlSdk\Wl\Quiz\Response;

use WlSdk\WlSdkClient;

/**
 * Returns quiz response data including element answers, dates, and access information.
 *
 * @deprecated
 */
class ResponseGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns quiz response data including element answers, dates, and access information.
     *
     * Loads the response for the specified quiz and user, resolving answers, formatted dates, and access flags
     * such as
     * amendment availability and PDF generation support.
     *
     * @return ResponseGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ResponseGetRequest $request): ResponseGetResponse
    {
        return new ResponseGetResponse($this->client->request('/Wl/Quiz/Response/Response.json', $request->params(), 'GET'));
    }
}
