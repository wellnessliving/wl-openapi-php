<?php
namespace WlSdk\Wl\Login\Mail;

use WlSdk\WlSdkClient;

/**
 * Checks if specified user exists in specified business.
 */
class MailUseApi
{
    /**
     * The business for which the email address search is being performed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The email address to check for.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

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
     * @return MailUseApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): MailUseApiGetResponse
    {
        return new MailUseApiGetResponse($this->client->request('/Wl/Login/Mail/MailUse.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'text_mail' => $this->text_mail,
            ],
            static fn($v) => $v !== null
        );
    }
}
