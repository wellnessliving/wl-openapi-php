<?php
namespace WlSdk\Wl\Book\Process\Relation;

use WlSdk\WlSdkClient;

/**
 * Checks if user can book specified session.
 */
class RelationApi
{
    /**
     * List of check that must be skipped.
     * Each element must be a member of [ProcessCheckSid](#/components/schemas/Wl.Book.Process.ProcessCheckSid).
     *
     * @var int[]|null
     */
    public ?array $a_check_ignore = null;

    /**
     * The date/time of the session to check for booking availability.
     *
     * @var string|null
     */
    public ?string $dtu_date = null;

    /**
     * Checking whether the client has a credit card (if configured in the business) will be skipped if this flag
     * is set to `false`.
     * 
     * Use this field with caution.
     * The final booking will not use this flag and the check will still be performed.
     *
     * @var bool|null
     */
    public ?bool $is_credit_card_check = null;

    /**
     * The business where `uid_from` creates the new relative.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the session to check for booking availability.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * The user who's adding the new relative.
     *
     * @var string|null
     */
    public ?string $uid_from = null;

    /**
     * Day of birthday.
     * `null` if birthday is not entered.
     *
     * @var int|null
     */
    public ?int $i_day = null;

    /**
     * Month of birthday.
     * `null` if birthday is not entered.
     *
     * @var int|null
     */
    public ?int $i_month = null;

    /**
     * Year of birthday.
     * `null` if birthday is not entered.
     *
     * @var int|null
     */
    public ?int $i_year = null;

    /**
     * The mode type.
     * One of the [ModeSid](#/components/schemas/Wl.Mode.ModeSid) constants.
     *
     * @var int|null
     */
    public ?int $id_mode = null;

    /**
     * The relation type.
     * One of the [RsFamilyRelationSid](#/components/schemas/RsFamilyRelationSid) constants.
     *
     * @var int|null
     */
    public ?int $id_relation = null;

    /**
     * `true` - the new relative uses the email from `uid_from`.
     * 
     * `false` - the new relative has their own email.
     *
     * @var bool|null
     */
    public ?bool $is_mail_inherit = null;

    /**
     * `true` - the new relative pays for themselves.
     * 
     * `false` - `uid_from` pays for the new relative.
     *
     * @var bool|null
     */
    public ?bool $is_pay_self = null;

    /**
     * The new relative's email.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * The new relative's first name.
     *
     * @var string|null
     */
    public ?string $text_name_first = null;

    /**
     * The new relative's last name.
     *
     * @var string|null
     */
    public ?string $text_name_last = null;

    /**
     * UID of already existed in another business user.
     *
     * @var string|null
     */
    public ?string $uid_existed = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks if user can book specified session.
     *
     * Validates the date, business, class period, and user, verifies the session is not already booked, then
     * runs the full booking eligibility check (credit card, waiver, age, overlap, outstanding balance) and throws
     * a descriptive user-facing error if any requirement is not met.
     *
     * @return RelationApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): RelationApiGetResponse
    {
        return new RelationApiGetResponse($this->client->request('/Wl/Book/Process/Relation/Relation.json', $this->params(), 'GET'));
    }

    /**
     * Added new relative.
     *
     * Creates a new family member profile for the specified business and links it as a relative of `uid_from`,
     * applying birthday validation, email-inheritance rules, and payment responsibility settings. Returns the UID
     * of the newly created user in `uid_create`.
     *
     * @return RelationApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): RelationApiPostResponse
    {
        return new RelationApiPostResponse($this->client->request('/Wl/Book/Process/Relation/Relation.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'a_check_ignore' => $this->a_check_ignore,
            'dtu_date' => $this->dtu_date,
            'is_credit_card_check' => $this->is_credit_card_check,
            'k_business' => $this->k_business,
            'k_class_period' => $this->k_class_period,
            'uid_from' => $this->uid_from,
            'i_day' => $this->i_day,
            'i_month' => $this->i_month,
            'i_year' => $this->i_year,
            'id_mode' => $this->id_mode,
            'id_relation' => $this->id_relation,
            'is_mail_inherit' => $this->is_mail_inherit,
            'is_pay_self' => $this->is_pay_self,
            'text_mail' => $this->text_mail,
            'text_name_first' => $this->text_name_first,
            'text_name_last' => $this->text_name_last,
            'uid_existed' => $this->uid_existed,
            ],
            static fn($v) => $v !== null
        );
    }
}
