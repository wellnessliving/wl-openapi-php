<?php

namespace WlSdk\Thoth\Report\SalesReport\Client\AccountReport\Statement;

/**
 * Response from GET
 */
class StatementDataGetResponse
{
    /**
     * Aged balance summary buckets as of the statement date.
     *
     * Each bucket is the remaining unpaid amount from charges past due by the indicated range.
     * Payments are applied to oldest charges first (FIFO).
     * A negative amount indicates an unused credit.
     *
     * Structure:
     *
     * @var StatementDataGetResponseAgedBalance|null
     */
    public ?StatementDataGetResponseAgedBalance $a_aged_balance = null;

    /**
     * List of account methods available for this client.
     *
     * Rendered as a drop-down only when more than one account method exists.
     *
     * Each element:
     *
     * @var StatementDataGetResponsePayMethod[]|null
     */
    public ?array $a_pay_method = null;

    /**
     * Statement table rows, ordered by date ascending.
     *
     * Each element:
     *
     * @var StatementDataGetResponseRow[]|null
     */
    public ?array $a_row = null;

    /**
     * Period end date.
     *
     * Written back as result after period resolution so callers can read the effective date.
     *
     * @var string|null
     */
    public ?string $dl_end = null;

    /**
     * Period start date.
     *
     * Written back as result after period resolution so callers can read the effective date.
     *
     * @var string|null
     */
    public ?string $dl_start = null;

    /**
     * Statement date (today in business timezone).
     *
     * Shown in the "Aged balance summary as of ..." heading.
     *
     * @var string|null
     */
    public ?string $dl_statement_date = null;

    /**
     * Next sequential statement number for the client within the business.
     *
     * Computed as total existing statements plus one.
     * Shown in preview as "#[uid]-[number]".
     *
     * @var int|null
     */
    public ?int $i_statement_next = null;

    /**
     * Whether the email channel of the New Account Statement client notification
     * ({@link \WlSdk\RsMailSid}) is disabled for the business.
     *
     * When `true`, the email confirmation dialog shows a warning above the recipient
     * input. The email is still delivered on Send via the manual override in
     * Mail::send().
     *
     * @var bool|null
     */
    public ?bool $is_mail_disabled = null;

    /**
     * Whether there is no account activity during the statement period.
     *
     * When `true`, only the Previous Balance row is shown in the statement table.
     *
     * @var bool|null
     */
    public ?bool $is_no_activity = null;

    /**
     * Whether the client is a payer (has relationships).
     *
     * When `true`, the "Includes relationships' account activity" toggle is shown.
     *
     * @var bool|null
     */
    public ?bool $is_payer = null;

    /**
     * Business currency key.
     *
     * @var string|null
     */
    public ?string $k_currency = null;

    /**
     * Balance due at end of statement period (sign-flipped).
     *
     * Matches the Balance column of the last row in the statement table.
     *
     * @var string|null
     */
    public ?string $m_balance_due = null;

    /**
     * Opening balance before the statement period (sign-flipped).
     *
     * Shown as the "Previous Balance" row.
     *
     * @var string|null
     */
    public ?string $m_previous_balance = null;

    /**
     * Business address text.
     *
     * @var string|null
     */
    public ?string $text_business_address = null;

    /**
     * Business city name.
     *
     * Empty string if not saved on the business profile.
     *
     * @var string|null
     */
    public ?string $text_business_city = null;

    /**
     * Business name.
     *
     * @var string|null
     */
    public ?string $text_business_name = null;

    /**
     * Business postal/zip code.
     *
     * Empty string if not saved on the business profile.
     *
     * @var string|null
     */
    public ?string $text_business_zip_code = null;

    /**
     * Client full address text.
     *
     * Empty string if not saved on profile.
     *
     * @var string|null
     */
    public ?string $text_client_address = null;

    /**
     * Client city name.
     *
     * Empty string if not saved on profile.
     *
     * @var string|null
     */
    public ?string $text_client_city = null;

    /**
     * Client full name.
     *
     * @var string|null
     */
    public ?string $text_client_name = null;

    /**
     * Client postal/zip code.
     *
     * Empty string if not saved on profile.
     *
     * @var string|null
     */
    public ?string $text_client_zip_code = null;

    /**
     * Default email address for statement delivery.
     *
     * Taken from the client profile (`text_mail`).
     * `null` if no email is saved.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * Statement period label.
     *
     * Format: "Dec 1, 2025 - Dec 31, 2025".
     *
     * @var string|null
     */
    public ?string $text_period = null;

    /**
     * Statement date formatted in business locale (e.g. "May 6, 2026").
     *
     * @var string|null
     */
    public ?string $text_statement_date = null;

    /**
     * Client UID displayed in the statement.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Business logo URL.
     *
     * Empty string when the business has no logo set.
     *
     * @var string|null
     */
    public ?string $url_logo = null;

    public function __construct(array $data)
    {
        $this->a_aged_balance = isset($data['a_aged_balance']) ? new StatementDataGetResponseAgedBalance((array)$data['a_aged_balance']) : null;
        $this->a_pay_method = isset($data['a_pay_method']) ? array_map(static fn ($item) => new StatementDataGetResponsePayMethod((array)$item), (array)$data['a_pay_method']) : null;
        $this->a_row = isset($data['a_row']) ? array_map(static fn ($item) => new StatementDataGetResponseRow((array)$item), (array)$data['a_row']) : null;
        $this->dl_end = isset($data['dl_end']) ? (string)$data['dl_end'] : null;
        $this->dl_start = isset($data['dl_start']) ? (string)$data['dl_start'] : null;
        $this->dl_statement_date = isset($data['dl_statement_date']) ? (string)$data['dl_statement_date'] : null;
        $this->i_statement_next = isset($data['i_statement_next']) ? (int)$data['i_statement_next'] : null;
        $this->is_mail_disabled = isset($data['is_mail_disabled']) ? (bool)$data['is_mail_disabled'] : null;
        $this->is_no_activity = isset($data['is_no_activity']) ? (bool)$data['is_no_activity'] : null;
        $this->is_payer = isset($data['is_payer']) ? (bool)$data['is_payer'] : null;
        $this->k_currency = isset($data['k_currency']) ? (string)$data['k_currency'] : null;
        $this->m_balance_due = isset($data['m_balance_due']) ? (string)$data['m_balance_due'] : null;
        $this->m_previous_balance = isset($data['m_previous_balance']) ? (string)$data['m_previous_balance'] : null;
        $this->text_business_address = isset($data['text_business_address']) ? (string)$data['text_business_address'] : null;
        $this->text_business_city = isset($data['text_business_city']) ? (string)$data['text_business_city'] : null;
        $this->text_business_name = isset($data['text_business_name']) ? (string)$data['text_business_name'] : null;
        $this->text_business_zip_code = isset($data['text_business_zip_code']) ? (string)$data['text_business_zip_code'] : null;
        $this->text_client_address = isset($data['text_client_address']) ? (string)$data['text_client_address'] : null;
        $this->text_client_city = isset($data['text_client_city']) ? (string)$data['text_client_city'] : null;
        $this->text_client_name = isset($data['text_client_name']) ? (string)$data['text_client_name'] : null;
        $this->text_client_zip_code = isset($data['text_client_zip_code']) ? (string)$data['text_client_zip_code'] : null;
        $this->text_mail = isset($data['text_mail']) ? (string)$data['text_mail'] : null;
        $this->text_period = isset($data['text_period']) ? (string)$data['text_period'] : null;
        $this->text_statement_date = isset($data['text_statement_date']) ? (string)$data['text_statement_date'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
        $this->url_logo = isset($data['url_logo']) ? (string)$data['url_logo'] : null;
    }
}
