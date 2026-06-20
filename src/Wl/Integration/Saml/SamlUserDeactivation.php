<?php

namespace WlSdk\Wl\Integration\Saml;

use WlSdk\WlSdkClient;

/**
 * Gets status of the user in business for given list of identifiers.
 */
class SamlUserDeactivation
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets status of the user in business for given list of identifiers.
     *
     * Accepts a list of SAML identifier strings and returns a map of each identifier to a boolean indicating
     * whether the corresponding user is active in their associated business. Requests with too many invalid
     * identifiers are rate-limited with a penalty block mechanism.
     *
     * @return SamlUserDeactivationPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(SamlUserDeactivationPostRequest $request): SamlUserDeactivationPostResponse
    {
        return new SamlUserDeactivationPostResponse($this->client->request('/Wl/Integration/Saml/SamlUserDeactivation.json', $request->params(), 'POST'));
    }
}
