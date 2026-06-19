<?php
namespace WlSdk\Wl\Book\Process\Resource;

use WlSdk\WlSdkClient;

/**
 * Processes the asset selection step of the booking wizard, decoding the JSON-encoded session input before delegating
 * to the parent.
 */
class Resource54Post
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Processes the asset selection step of the booking wizard, decoding the JSON-encoded session input before delegating to the parent.
     *
     * Deserializes the JSON-encoded session selection into `a_session` and then delegates to
     * `post()` to save the selected assets and advance the booking wizard.
     *
     * @return Resource54PostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(Resource54PostRequest $request): Resource54PostResponse
    {
        return new Resource54PostResponse($this->client->request('/Wl/Book/Process/Resource/Resource54.json', $request->params(), 'POST'));
    }
}
