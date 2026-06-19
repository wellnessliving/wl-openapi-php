<?php
namespace WlSdk\Wl\Mail;

use WlSdk\WlSdkClient;

/**
 * Sends email.
 */
class SendMailApi
{
    /**
     * Custom rules for mapping API error status codes to HTTP status codes.

By default the API always returns HTTP 200, even when the response contains an error. Setting this header enables error-to-HTTP-code conversion: when the response status matches a rule, the corresponding 4xx code is returned instead of 200.

Format: comma-separated entries of `{4xx_code} {pattern}[, ...]`. Pattern syntax:
- `status` - exact status match.
- `-suffix` - status ends with `-suffix`.
- `-part-` - status contains `-part-`.
- `prefix-` - status starts with `prefix-`.
- `-` - catch-all for any non-ok status that did not match any other rule.

The special entry `default` (no HTTP code prefix) expands to the built-in ruleset at that position: `400 -`, `403 -access access access-`, `404 -nx`. Rules listed before `default` override the built-in ones; rules after are fallbacks. Example: `401 access,403 access-,404 -nx,default`.

Only standard 4xx codes are accepted.
     *
     * @var string|null
     */
    public ?string $X-Error-Rules = null;

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
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Mail/SendMail.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
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
