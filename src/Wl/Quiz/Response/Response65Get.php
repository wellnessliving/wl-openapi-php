<?php
namespace WlSdk\Wl\Quiz\Response;

use WlSdk\WlSdkClient;

/**
 * Returns quiz response data including element answers, dates, and access information.
 */
class Response65Get
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
     * @return Response65GetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(Response65GetRequest $request): Response65GetResponse
    {
        return new Response65GetResponse($this->client->request('/Wl/Quiz/Response/Response65.json', $request->params(), 'GET'));
    }
}
