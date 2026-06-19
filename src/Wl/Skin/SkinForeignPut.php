<?php
namespace WlSdk\Wl\Skin;

use WlSdk\WlSdkClient;

/**
 * Updates the existing widget.
 */
class SkinForeignPut
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Updates the existing widget.
     *
     * Updates the configuration of an existing widget skin identified by the business and
     * external foreign ID. Throws an error if no matching foreign ID is found, directing
     * the caller to use POST instead.
     *
     * @return SkinForeignPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(SkinForeignPutRequest $request): SkinForeignPutResponse
    {
        return new SkinForeignPutResponse($this->client->request('/Wl/Skin/SkinForeign.json', $request->params(), 'PUT'));
    }
}
