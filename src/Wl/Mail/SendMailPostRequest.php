<?php
namespace WlSdk\Wl\Mail;

class SendMailPostRequest
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

    public function params(): array
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
