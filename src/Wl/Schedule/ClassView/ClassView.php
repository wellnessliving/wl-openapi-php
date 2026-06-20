<?php
namespace WlSdk\Wl\Schedule\ClassView;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about class.
 */
class ClassView
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about class.
     *
     * Returns detailed information about one or more class sessions, including staff, location,
     * assigned assets, virtual location links, visit counts, and booking availability. Supports
     * single-session mode for one class period or multi-session mode for batch lookups.
     *
     * @return ClassViewGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ClassViewGetRequest $request): ClassViewGetResponse
    {
        return new ClassViewGetResponse($this->client->request('/Wl/Schedule/ClassView/ClassView.json', $request->params(), 'GET'));
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
