<?php
namespace WlSdk\Wl\Business\AuthorizePartner;

use WlSdk\WlSdkClient;

/**
 * Grants or denies access to business location for a partner.
 */
class AuthorizePartnerApi
{
    /**
     * Determines whether the user will be granted access or if access will be revoked.
     * If `true`, access will be granted. If `false`, access will be revoked.
     * Revoking access is a scheduled task set to be run within the next 15 minutes.
     *
     * @var bool|null
     */
    public ?bool $is_grant = null;

    /**
     * The key of the franchisee location to enter.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The key of the user who will be granted access.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Grants or denies access to business location for a partner.
     *
     * Allows a franchisor staff member to temporarily let another user into a franchisee location. Requires
     * the "Manage Franchise Location" privilege. Granted access expires after 24 hours; revoking schedules
     * removal within 15 minutes.
     *
     * @return AuthorizePartnerApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): AuthorizePartnerApiGetResponse
    {
        return new AuthorizePartnerApiGetResponse($this->client->request('/Wl/Business/AuthorizePartner/AuthorizePartner.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'is_grant' => $this->is_grant,
            'k_location' => $this->k_location,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
