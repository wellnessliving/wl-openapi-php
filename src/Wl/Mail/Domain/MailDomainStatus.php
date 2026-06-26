<?php

namespace WlSdk\Wl\Mail\Domain;

use WlSdk\WlSdkClient;

/**
 * Returns the domain verification status for the business.
 */
class MailDomainStatus
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the domain verification status for the business.
     *
     * @return MailDomainStatusGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(MailDomainStatusGetRequest $request): MailDomainStatusGetResponse
    {
        return new MailDomainStatusGetResponse($this->client->request('/Wl/Mail/Domain/MailDomainStatus.json', $request->params(), 'GET'));
    }
}
