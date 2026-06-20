<?php

namespace WlSdk\Wl\Business\AuthorizePartner;

use WlSdk\WlSdkClient;

/**
 * Grants or denies access to business location for a partner.
 */
class AuthorizePartner
{
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
     * @return AuthorizePartnerGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AuthorizePartnerGetRequest $request): AuthorizePartnerGetResponse
    {
        return new AuthorizePartnerGetResponse($this->client->request('/Wl/Business/AuthorizePartner/AuthorizePartner.json', $request->params(), 'GET'));
    }
}
