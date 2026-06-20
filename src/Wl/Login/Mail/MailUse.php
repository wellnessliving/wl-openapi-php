<?php
namespace WlSdk\Wl\Login\Mail;

use WlSdk\WlSdkClient;

/**
 * Checks if specified user exists in specified business.
 */
class MailUse
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks if specified user exists in specified business.
     *
     * Accepts a business key and an email address, validates both, and returns `true` if a user with that email is
     * an
     * active member of the business. Requests are rate-limited per IP unless the caller has the required
     * privilege.
     *
     * @return MailUseGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(MailUseGetRequest $request): MailUseGetResponse
    {
        return new MailUseGetResponse($this->client->request('/Wl/Login/Mail/MailUse.json', $request->params(), 'GET'));
    }
}
