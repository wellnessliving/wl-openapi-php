<?php
namespace WlSdk\Wl\Skin\Application;

use WlSdk\WlSdkClient;

/**
 * Returns the application customisation skin data for the given business.
 */
class Skin
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the application customisation skin data for the given business.
     *
     * Returns the full set of White Label Achieve app customization settings (colors, logos, fonts,
     * and other branding options) for the given business, along with a flag indicating whether
     * the business account has an active paid customization subscription.
     *
     * @return SkinGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(SkinGetRequest $request): SkinGetResponse
    {
        return new SkinGetResponse($this->client->request('/Wl/Skin/Application/Skin.json', $request->params(), 'GET'));
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
