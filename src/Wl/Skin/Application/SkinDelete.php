<?php
namespace WlSdk\Wl\Skin\Application;

use WlSdk\WlSdkClient;

/**
 * Reset customisation form of client application.
 */
class SkinDelete
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Reset customisation form of client application.
     *
     * Resets the Achieve app customization skin to default values for the given business.
     * If billing is required for the reset, a confirmation flag must be provided, and a
     * customization fee may be scheduled.
     *
     * @return SkinDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(SkinDeleteRequest $request): SkinDeleteResponse
    {
        return new SkinDeleteResponse($this->client->request('/Wl/Skin/Application/Skin.json', $request->params(), 'DELETE'));
    }
}
