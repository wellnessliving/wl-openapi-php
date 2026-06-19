<?php
namespace WlSdk\Wl\Business\Lead;

class BusinessLeadPostRequest
{
    /**
     * The business's partner key.
     *
     * @var string|null
     */
    public ?string $k_business_partner = null;

    /**
     * The business's name.
     *
     * @var string|null
     */
    public ?string $text_business_name = null;

    /**
     * The client's full name.
     *
     * @var string|null
     */
    public ?string $text_client_name = null;

    /**
     * The client's email.
     *
     * @var string|null
     */
    public ?string $text_email = null;

    /**
     * The client's phone number.
     *
     * @var string|null
     */
    public ?string $text_phone = null;

    /**
     * The business's partner promo code.
     *
     * @var string|null
     */
    public ?string $text_promo_code = null;

    /**
     * The website URL.
     *
     * @var string|null
     */
    public ?string $url_website = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business_partner' => $this->k_business_partner,
            'text_business_name' => $this->text_business_name,
            'text_client_name' => $this->text_client_name,
            'text_email' => $this->text_email,
            'text_phone' => $this->text_phone,
            'text_promo_code' => $this->text_promo_code,
            'url_website' => $this->url_website,
            ],
            static fn($v) => $v !== null
        );
    }
}
