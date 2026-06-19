<?php
namespace WlSdk\Core\Sid;

use WlSdk\WlSdkClient;

/**
 * Returns the list of all items for the given Sid class.
 */
class CoreSidGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the list of all items for the given Sid class.
     *
     * Populates enumeration dropdowns and lookup tables on the frontend.
     *
     * @return CoreSidGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CoreSidGetRequest $request): CoreSidGetResponse
    {
        return new CoreSidGetResponse($this->client->request('/Core/Sid/CoreSid.json', $request->params(), 'GET'));
    }
}
