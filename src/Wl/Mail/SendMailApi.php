<?php
namespace WlSdk\Wl\Mail;

use WlSdk\WlSdkClient;

/**
 * Sends email.
 */
class SendMailApi
{
    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The business's mailing address.
     *
     * @var string|null
     */
    public ?string $s_business_mail = null;

    /**
     * The business name.
     *
     * @var string|null
     */
    public ?string $s_business_name = null;

    /**
     * The business's reply.
     *
     * @var string|null
     */
    public ?string $s_business_reply = null;

    /**
     * The campaign name.
     *
     * @var string|null
     */
    public ?string $s_campaign = null;

    /**
     * The message uncompressed content.
     *
     * @var string|null
     */
    public ?string $s_html = null;

    /**
     * The message recipient's address.
     *
     * @var string|null
     */
    public ?string $s_mail = null;

    /**
     * The message's subject line.
     *
     * @var string|null
     */
    public ?string $s_subject = null;

    /**
     * The message content.
     *
     * @var string|null
     */
    public ?string $z_html = null;

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
     * @return SendMailApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): SendMailApiPostResponse
    {
        return new SendMailApiPostResponse($this->client->request('/Wl/Mail/SendMail.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            's_business_mail' => $this->s_business_mail,
            's_business_name' => $this->s_business_name,
            's_business_reply' => $this->s_business_reply,
            's_campaign' => $this->s_campaign,
            's_html' => $this->s_html,
            's_mail' => $this->s_mail,
            's_subject' => $this->s_subject,
            'z_html' => $this->z_html,
            ],
            static fn($v) => $v !== null
        );
    }
}
