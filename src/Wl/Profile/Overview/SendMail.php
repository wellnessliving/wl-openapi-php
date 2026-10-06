<?php

namespace WlSdk\Wl\Profile\Overview;

use WlSdk\WlSdkClient;

/**
 * This method is called to process POST query.
 */
class SendMail
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * This method is called to process POST query.
     *
     * Validates the mail id, business, and target user, checks that the current staff member has access to
     * the user and permission to send mail, builds any additional data required for the selected mail (for
     * example, a password reset link), and sends the notification.
     *
     * @return SendMailPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(SendMailPostRequest $request): SendMailPostResponse
    {
        return new SendMailPostResponse($this->client->request('/Wl/Profile/Overview/SendMail.json', $request->params(), 'POST'));
    }
}
