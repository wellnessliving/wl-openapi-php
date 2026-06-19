<?php
namespace WlSdk\Wl\Skin\Application\Resource;

use WlSdk\WlSdkClient;

/**
 * Gets application resources.
 */
class ApplicationResourceApi
{
    /**
     * The business key.
     * Empty to get data for all businesses.
     *
     * @var string|null
     */
    public ?string $k_business = null;

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
     * @return ApplicationResourceApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): ApplicationResourceApiGetResponse
    {
        return new ApplicationResourceApiGetResponse($this->client->request('/Wl/Skin/Application/Resource/ApplicationResource.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
