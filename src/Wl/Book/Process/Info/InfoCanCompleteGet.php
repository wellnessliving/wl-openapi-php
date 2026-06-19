<?php
namespace WlSdk\Wl\Book\Process\Info;

use WlSdk\WlSdkClient;

/**
 * Checks whether the user can complete booking wizard without additional steps.
 *
 * @deprecated
 */
class InfoCanCompleteGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks whether the user can complete booking wizard without additional steps.
     *
     * Copies the GET session selection into the POST field and delegates to `post()`.
     * Prefer the POST variant when the session list may be large, as the query string has length limitations.
     *
     * @return InfoCanCompleteGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(InfoCanCompleteGetRequest $request): InfoCanCompleteGetResponse
    {
        return new InfoCanCompleteGetResponse($this->client->request('/Wl/Book/Process/Info/InfoCanComplete.json', $request->params(), 'GET'));
    }
}
