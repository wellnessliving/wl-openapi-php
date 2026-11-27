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
     * With {@link \WlSdk\Wl\Login\Mail\MailUse} set to `true`, the membership in the business is not checked: only
     * {@link \WlSdk\Wl\Login\Mail\MailUseGetResponse::$is_use} is returned, `true` if the email address is used by
     * an account of `WellnessLiving`
     * that is not a virtual user. The business key is still required and validated, and the same rate limit
     * applies.
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
