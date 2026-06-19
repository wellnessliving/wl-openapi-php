<?php
namespace WlSdk\Wl\Business\Partner;

use WlSdk\WlSdkClient;

/**
 * Returns the partner URL for the specified business.
 */
class PartnerCodeApi
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Unique code that business can give other businesses to tell them about system.
     *
     * @var string|null
     */
    public ?string $text_code = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the partner URL for the specified business.
     *
     * Used to display or share the business's unique Partner Program landing page link. Partner URLs are
     * public information, so no access check is performed.
     *
     * @return PartnerCodeApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): PartnerCodeApiGetResponse
    {
        return new PartnerCodeApiGetResponse($this->client->request('/Wl/Business/Partner/PartnerCode.json', $this->params(), 'GET'));
    }

    /**
     * Updates partner url for a business that takes part in the partner program.
     *
     * Allows a Partner Program member to set a memorable custom vanity code for their referral landing page.
     * The code must be unique across all businesses and contain only letters, digits, and underscores.
     *
     * @return PartnerCodeApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): PartnerCodeApiPostResponse
    {
        return new PartnerCodeApiPostResponse($this->client->request('/Wl/Business/Partner/PartnerCode.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'text_code' => $this->text_code,
            ],
            static fn($v) => $v !== null
        );
    }
}
