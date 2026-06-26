<?php

namespace WlSdk\Wl\Mail\Pattern\Edit;

class MailPatternEditGetRequest
{
    /**
     * List of client and member types. Each element is primary key in the Sql table.
     *
     * @var string[]|null
     */
    public ?array $a_login_type = null;

    /**
     * List of member groups. Each element is primary key in the Sql table.
     *
     * @var string[]|null
     */
    public ?array $a_member_group = null;

    /**
     * Whether or not to stop sending review requests after `i_max_review_request` is reached.
     *
     * `null` if not set.
     *
     * @var bool|null
     */
    public ?bool $has_max_review_request = null;

    /**
     * The amount for the new delay before sending mail.
     *
     * `null` if not loaded.
     *
     * @var int|null
     */
    public ?int $i_after = null;

    /**
     * Count of the duration unit after change.
     *
     * `null` if not loaded.
     *
     * @var int|null
     */
    public ?int $i_delay = null;

    /**
     * Maximum number of review requests that can be sent.
     *
     * `null` if not set.
     *
     * @var int|null
     */
    public ?int $i_max_review_request = null;

    /**
     * Type of the duration unit after change. One of constants {@link \WlSdk\ADurationSid}.
     *
     * `null` if not set.
     *
     * @var int|null
     * @see \WlSdk\ADurationSid
     */
    public ?int $id_duration_delay = null;

    /**
     * If `true` then mail for all visits will be rescheduled.
     * If `false` then only first will be rescheduled.
     *
     * After change.
     *
     * `null` if not set.
     *
     * @var bool|null
     */
    public ?bool $is_after_every = null;

    /**
     * Whether emails should be sent to members in churn risk group (Only for automated marketing).
     *
     * `true` if sent mails only to members in churn risk group.
     * `false` if sent mails not only to members in churn risk group.
     *
     * `null` if not set.
     *
     * @var bool|null
     */
    public ?bool $is_churn_risk = null;

    /**
     * Whether mail will be sent after the client has made a review.
     * `true` to send the mail, `false` to disable sending the mail. `null` if not set.
     *
     * @var bool|null
     */
    public ?bool $is_disable_review_request_after_review = null;

    /**
     * Whether need to prevent sending email without fulfilling a certain condition.
     * For example, for email RaMailSid::PROMOTION_PURCHASE and RaMailSid::LEAD_CAPTURE
     * `true` means that mail will not be sent to clients who make any new purchase, `false` otherwise.
     * After change.
     *
     * `null` if not set.
     *
     * @var bool|null
     */
    public ?bool $is_prevent = null;

    /**
     * Key of retention location. Primary key in RsLocationSql table.
     *
     * `null` if not set.
     *
     * @var string|null
     */
    public ?string $k_location_retention = null;

    /**
     * Key of the mail pattern. Primary key in RsMailPatternSql table.
     *
     * `null` if not loaded.
     *
     * @var string|null
     */
    public ?string $k_mail_pattern = null;

    /**
     * Object identifier.
     * Some mails related only with specific promotion, product or service.
     *
     * `null` if not set.
     *
     * @var string|null
     */
    public ?string $s_object = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_login_type' => $this->a_login_type,
            'a_member_group' => $this->a_member_group,
            'has_max_review_request' => $this->has_max_review_request,
            'i_after' => $this->i_after,
            'i_delay' => $this->i_delay,
            'i_max_review_request' => $this->i_max_review_request,
            'id_duration_delay' => $this->id_duration_delay,
            'is_after_every' => $this->is_after_every,
            'is_churn_risk' => $this->is_churn_risk,
            'is_disable_review_request_after_review' => $this->is_disable_review_request_after_review,
            'is_prevent' => $this->is_prevent,
            'k_location_retention' => $this->k_location_retention,
            'k_mail_pattern' => $this->k_mail_pattern,
            's_object' => $this->s_object,
            ],
            static fn ($v) => $v !== null
        );
    }
}
