<?php
namespace WlSdk\Wl\Mail;

use WlSdk\WlSdkClient;

/**
 * Sends email.
 */
class SendMailPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Sends email.
     *
     * Validates the recipient address, business email, subject, and HTML content, then saves the email pattern
     * and dispatches the message to the specified recipient. Rate limiting is applied per hour and per minute.
     *
     * @return SendMailPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(SendMailPostRequest $request): SendMailPostResponse
    {
        return new SendMailPostResponse($this->client->request('/Wl/Mail/SendMail.json', $request->params(), 'POST'));
    }
}
