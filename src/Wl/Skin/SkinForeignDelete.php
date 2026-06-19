<?php
namespace WlSdk\Wl\Skin;

use WlSdk\WlSdkClient;

/**
 * Deletes the existing widget.
 */
class SkinForeignDelete
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Deletes the existing widget.
     *
     * Permanently removes a widget skin and its foreign ID mapping from the business. Used
     * by external integrators to clean up a widget that is no longer needed.
     *
     * @return SkinForeignDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(SkinForeignDeleteRequest $request): SkinForeignDeleteResponse
    {
        return new SkinForeignDeleteResponse($this->client->request('/Wl/Skin/SkinForeign.json', $request->params(), 'DELETE'));
    }
}
