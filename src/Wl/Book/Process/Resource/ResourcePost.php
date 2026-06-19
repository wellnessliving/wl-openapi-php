<?php
namespace WlSdk\Wl\Book\Process\Resource;

use WlSdk\WlSdkClient;

/**
 * Saves the asset selection for the booking and attempts to book the session if no further steps are required.
 *
 * @deprecated
 */
class ResourcePost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves the asset selection for the booking and attempts to book the session if no further steps are required.
     *
     * Validates and stores the selected assets and session data in the booking process context, then, when no quiz
     * step is needed and payment is not required, attempts to complete the booking immediately. Returns visit
     * keys,
     * activity keys, and a flag indicating whether further wizard steps are needed.
     *
     * @return ResourcePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ResourcePostRequest $request): ResourcePostResponse
    {
        return new ResourcePostResponse($this->client->request('/Wl/Book/Process/Resource/Resource.json', $request->params(), 'POST'));
    }
}
