<?php
namespace WlSdk\Wl\Book\Process\Purchase;

use WlSdk\WlSdkClient;

/**
 * Returns available purchase options for the specified session, decoding JSON-encoded group promotion and session
 * inputs.
 */
class Purchase56
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns available purchase options for the specified session, decoding JSON-encoded group promotion and session inputs.
     *
     * Deserializes the JSON-encoded group login-promotion list and session selection, then delegates to the parent
     * to return the purchase options available for the current client and session.
     *
     * @return Purchase56GetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(Purchase56GetRequest $request): Purchase56GetResponse
    {
        return new Purchase56GetResponse($this->client->request('/Wl/Book/Process/Purchase/Purchase56.json', $request->params(), 'GET'));
    }
}
