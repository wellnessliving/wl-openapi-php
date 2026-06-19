<?php
namespace WlSdk\Wl\Schedule\ClassView;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about classes.
 */
class ClassViewPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about classes.
     *
     * A POST-method alternative to `get()` for multi-session batch lookups
     * where the session list is too long to encode in a GET query string. The session list is
     * provided as a JSON-encoded string in the request body.
     *
     * @return ClassViewPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ClassViewPostRequest $request): ClassViewPostResponse
    {
        return new ClassViewPostResponse($this->client->request('/Wl/Schedule/ClassView/ClassView.json', $request->params(), 'POST'));
    }
}
