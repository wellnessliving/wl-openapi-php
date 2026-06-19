<?php
namespace WlSdk\Wl\Business;

use WlSdk\WlSdkClient;

/**
 * Creates new business.
 */
class BusinessApi
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_staff_member = null;

    /**
     * The business locale.
     *
     * @var int|null
     */
    public ?int $id_locale = null;

    /**
     * `true` if location should be also created for the business.
     * `false` if otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_location_create = null;

    /**
     * `true` to send [RsMailSid::BUSINESS_CREATE](#/components/schemas/RsMailSid) mail when creating a staff
     * member.
     * Otherwise send [RsMailSid::LOGIN_WELCOME](#/components/schemas/RsMailSid) mail.
     *
     * @var bool|null
     */
    public ?bool $is_mail_send = null;

    /**
     * The key of the business type.
     *
     * @var string|null
     */
    public ?string $k_business_type = null;

    /**
     * The city key of the business.
     * Optional.
     *
     * @var string|null
     */
    public ?string $k_office_city = null;

    /**
     * Microsoft Clarity session ID associated with the business claim session.
     *
     * @var string|null
     */
    public ?string $s_clarity_session_id = null;

    /**
     * The email address of the location.
     * Optional.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * The address of the business.
     * Optional.
     *
     * @var string|null
     */
    public ?string $text_office_address = null;

    /**
     * The postal code of the business.
     * Optional.
     *
     * @var string|null
     */
    public ?string $text_office_postal = null;

    /**
     * The phone number of the business, staff and location.
     *
     * @var string|null
     */
    public ?string $text_phone = null;

    /**
     * The title of the business.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * The URL of the business website.
     * Optional.
     *
     * @var string|null
     */
    public ?string $url_site = null;

    /**
     * The key of the business.
     * 
     * When using `post()` returned key of the created business.
     * When using `put()` used for update business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the location for update or after creating.
     * `null` if location is not created.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Creates new business.
     *
     * Used during the self-onboarding flow when a new client signs up for WellnessLiving. Creates the business
     * with its default integrations, optional first location, default service categories, and an optional owner
     * staff account - all in a single transaction. Rate-limited per IP and globally to prevent abuse.
     *
     * @return BusinessApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): BusinessApiPostResponse
    {
        return new BusinessApiPostResponse($this->client->request('/Wl/Business/Business.json', $this->params(), 'POST'));
    }

    /**
     * Claims business.
     *
     * Used when a prospective client claims an existing unclaimed business record during onboarding.
     * Activates trial features, updates the location contact details, and optionally creates an owner
     * staff account. The business must not already be claimed and the location must belong to it.
     *
     * @return BusinessApiPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): BusinessApiPutResponse
    {
        return new BusinessApiPutResponse($this->client->request('/Wl/Business/Business.json', $this->params(), 'PUT'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'a_staff_member' => $this->a_staff_member,
            'id_locale' => $this->id_locale,
            'is_location_create' => $this->is_location_create,
            'is_mail_send' => $this->is_mail_send,
            'k_business_type' => $this->k_business_type,
            'k_office_city' => $this->k_office_city,
            's_clarity_session_id' => $this->s_clarity_session_id,
            'text_mail' => $this->text_mail,
            'text_office_address' => $this->text_office_address,
            'text_office_postal' => $this->text_office_postal,
            'text_phone' => $this->text_phone,
            'text_title' => $this->text_title,
            'url_site' => $this->url_site,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            ],
            static fn($v) => $v !== null
        );
    }
}
