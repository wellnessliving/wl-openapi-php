<?php

namespace WlSdk\Wl\Skin\Application\Resource;

use WlSdk\WlSdkClient;

/**
 * Gets application resources.
 */
class ApplicationResource
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets application resources.
     *
     * Returns image resource groups, version information, and Google OAuth credentials for one or
     * all White Label mobile applications. Called by the build pipeline to gather the data needed to
     * generate application source bundles. Pass a business key to restrict results to a single app.
     *
     * @return ApplicationResourceGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ApplicationResourceGetRequest $request): ApplicationResourceGetResponse
    {
        return new ApplicationResourceGetResponse($this->client->request('/Wl/Skin/Application/Resource/ApplicationResource.json', $request->params(), 'GET'));
    }
}
