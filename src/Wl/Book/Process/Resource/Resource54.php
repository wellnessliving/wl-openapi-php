<?php
namespace WlSdk\Wl\Book\Process\Resource;

use WlSdk\WlSdkClient;

/**
 * Returns available assets for the booking, decoding the JSON-encoded session input before delegating to the parent.
 */
class Resource54
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns available assets for the booking, decoding the JSON-encoded session input before delegating to the parent.
     *
     * Deserializes the JSON-encoded session selection into `a_session` and then delegates to
     * `get()` to return the available asset categories and items for the booking.
     *
     * @return Resource54GetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(Resource54GetRequest $request): Resource54GetResponse
    {
        return new Resource54GetResponse($this->client->request('/Wl/Book/Process/Resource/Resource54.json', $request->params(), 'GET'));
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
