<?php

namespace WlSdk\Wl\Skin\Application\Resource;

use WlSdk\WlSdkClient;

/**
 * Saves text metadata for the given business application.
 */
class ApplicationResourceMaterial
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves text metadata for the given business application.
     *
     * Persists all text fields of the Client App Materials form (store listing copy, contact details,
     * privacy policy URL, etc.) for the specified business. File assets such as icons and screenshots
     * are submitted separately via {@link \WlSdk\Wl\Skin\Application\Resource\ApplicationResourceUpload}. Requires
     * the App Build
     * Automation edit privilege.
     *
     * @return ApplicationResourceMaterialPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ApplicationResourceMaterialPostRequest $request): ApplicationResourceMaterialPostResponse
    {
        return new ApplicationResourceMaterialPostResponse($this->client->request('/Wl/Skin/Application/Resource/ApplicationResourceMaterial.json', $request->params(), 'POST'));
    }
}
