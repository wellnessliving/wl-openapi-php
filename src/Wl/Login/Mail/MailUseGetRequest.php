<?php

namespace WlSdk\Wl\Login\Mail;

class MailUseGetRequest
{
    /**
     * Whether to check the use of the email address by any account of `WellnessLiving` instead of the membership
     * in
     * the business.
     *
     * `true` to fill only {@link \WlSdk\Wl\Login\Mail\MailUseGetResponse::$is_use}, `false` to fill {@link
     * \WlSdk\Wl\Login\Mail\MailUseGetResponse::$is_exists} and
     * {@link \WlSdk\Wl\Login\Mail\MailUseGetResponse::$uid_use}.
     *
     * @var bool|null
     */
    public ?bool $is_any_business = null;

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

    public function params(): array
    {
        return array_filter(
            [
            'is_any_business' => $this->is_any_business,
            'k_business' => $this->k_business,
            'text_mail' => $this->text_mail,
            ],
            static fn ($v) => $v !== null
        );
    }
}
