<?php

namespace WlSdk\Wl\Sms\A2p;

class A2pRegistrationPutRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Primary contact information.
     *
     * @var array|null
     */
    public ?array $a_contact_primary = null;

    /**
     * Secondary contact information.
     *
     * @var array|null
     */
    public ?array $a_contact_secondary = null;

    /**
     * Business registration identifier. One of {@link \WlSdk\Core\Sms\A2p\BusinessRegistrationIdentifierSid}.
     *
     * @var int|null
     * @see \WlSdk\Core\Sms\A2p\BusinessRegistrationIdentifierSid
     */
    public ?int $id_business_registration_identifier = null;

    /**
     * Business structure. One of {@link \WlSdk\Core\Sms\A2p\BusinessStructureSid}.
     *
     * @var int|null
     * @see \WlSdk\Core\Sms\A2p\BusinessStructureSid
     */
    public ?int $id_business_structure = null;

    /**
     * A2P10DLC campaign type. One of {@link \WlSdk\Core\Sms\A2p\CampaignTypeSid}.
     *
     * @var int|null
     * @see \WlSdk\Core\Sms\A2p\CampaignTypeSid
     */
    public ?int $id_campaign_type = null;

    /**
     * Business company type. One of {@link \WlSdk\Core\Sms\A2p\CompanyTypeSid}.
     *
     * @var int|null
     * @see \WlSdk\Core\Sms\A2p\CompanyTypeSid
     */
    public ?int $id_company_type = null;

    /**
     * Business stock exchange. One of {@link \WlSdk\Core\Sms\A2p\StockExchangeSid}.
     *
     * @var int|null
     * @see \WlSdk\Core\Sms\A2p\StockExchangeSid
     */
    public ?int $id_stock_exchange = null;

    /**
     * Business country key.
     *
     * @var string|null
     */
    public ?string $k_country = null;

    /**
     * Business address.
     *
     * @var string|null
     */
    public ?string $text_address = null;

    /**
     * DBA / Trade Name (optional).
     *
     * @var string|null
     */
    public ?string $text_brand_name = null;

    /**
     * Business name.
     *
     * @var string|null
     */
    public ?string $text_business_name = null;

    /**
     * Business phone number.
     *
     * @var string|null
     */
    public ?string $text_business_phone = null;

    /**
     * Business registration number.
     *
     * @var string|null
     */
    public ?string $text_business_registration_number = null;

    /**
     * Business city.
     *
     * @var string|null
     */
    public ?string $text_city = null;

    /**
     * Business owner first name.
     *
     * @var string|null
     */
    public ?string $text_name_first = null;

    /**
     * Business owner last name.
     *
     * @var string|null
     */
    public ?string $text_name_last = null;

    /**
     * Notification email address.
     *
     * @var string|null
     */
    public ?string $text_notification_email = null;

    /**
     * Business postal/ZIP code.
     *
     * @var string|null
     */
    public ?string $text_postal = null;

    /**
     * Business province/state.
     *
     * @var string|null
     */
    public ?string $text_region = null;

    /**
     * Business stock ticker.
     *
     * @var string|null
     */
    public ?string $text_stock_ticker = null;

    /**
     * OTP Verification phone number.
     *
     * @var string|null
     */
    public ?string $text_verification_phone = null;

    /**
     * Business website URL.
     *
     * @var string|null
     */
    public ?string $text_website_url = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'a_contact_primary' => $this->a_contact_primary,
            'a_contact_secondary' => $this->a_contact_secondary,
            'id_business_registration_identifier' => $this->id_business_registration_identifier,
            'id_business_structure' => $this->id_business_structure,
            'id_campaign_type' => $this->id_campaign_type,
            'id_company_type' => $this->id_company_type,
            'id_stock_exchange' => $this->id_stock_exchange,
            'k_country' => $this->k_country,
            'text_address' => $this->text_address,
            'text_brand_name' => $this->text_brand_name,
            'text_business_name' => $this->text_business_name,
            'text_business_phone' => $this->text_business_phone,
            'text_business_registration_number' => $this->text_business_registration_number,
            'text_city' => $this->text_city,
            'text_name_first' => $this->text_name_first,
            'text_name_last' => $this->text_name_last,
            'text_notification_email' => $this->text_notification_email,
            'text_postal' => $this->text_postal,
            'text_region' => $this->text_region,
            'text_stock_ticker' => $this->text_stock_ticker,
            'text_verification_phone' => $this->text_verification_phone,
            'text_website_url' => $this->text_website_url,
            ],
            static fn ($v) => $v !== null
        );
    }
}
