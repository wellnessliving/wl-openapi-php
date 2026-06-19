<?php
namespace WlSdk\Wl\Skin\Application;

use WlSdk\WlSdkClient;

/**
 * Returns the application customisation skin data for the given business.
 */
class SkinApi
{
    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Whether customization billing is confirmed.
     * 
     * `true` to finish delete process even if customization fee will be billed.
     * `false` if customization fee should be required for confirmation.
     *
     * @var bool|null
     */
    public ?bool $is_billing_confirm = null;

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
     * @return SkinApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): SkinApiGetResponse
    {
        return new SkinApiGetResponse($this->client->request('/Wl/Skin/Application/Skin.json', $this->params(), 'GET'));
    }

    /**
     * Reset customisation form of client application.
     *
     * Resets the Achieve app customization skin to default values for the given business.
     * If billing is required for the reset, a confirmation flag must be provided, and a
     * customization fee may be scheduled.
     *
     * @return SkinApiDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): SkinApiDeleteResponse
    {
        return new SkinApiDeleteResponse($this->client->request('/Wl/Skin/Application/Skin.json', $this->params(), 'DELETE'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'is_billing_confirm' => $this->is_billing_confirm,
            ],
            static fn($v) => $v !== null
        );
    }
}
