<?php

namespace WlSdk\Thoth\Report\SalesReport\Client\AccountReport\Statement;

class StatementGeneratePostRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Client key.
     *
     * @var string|null
     */
    public ?string $uid_client = null;

    /**
     * Period end date in MySQL date format.
     *
     * @var string|null
     */
    public ?string $dl_end = null;

    /**
     * Period start date in MySQL date format.
     *
     * @var string|null
     */
    public ?string $dl_start = null;

    /**
     * Sequential ordinal of this statement for the client at this business (1-based).
     *
     * Computed by [StatementDataApi](/Thoth/Report/SalesReport/Client/AccountReport/Statement/StatementData.json)
     *  as `i_statement_next` and passed by the frontend without recomputation on save.
     *
     * @var int|null
     */
    public ?int $i_statement_number = null;

    /**
     * Whether to send a New Account Statement notification after saving.
     *
     * When `true`, sends an email notification to the address specified in `text_mail`.
     *
     * @var bool|null
     */
    public ?bool $is_email = null;

    /**
     * Whether to include relationships account activity in the statement.
     *
     * @var bool|null
     */
    public ?bool $is_include_relationship = null;

    /**
     * Whether the mailing envelope address format was applied.
     *
     * @var bool|null
     */
    public ?bool $is_mail_format = null;

    /**
     * Account method key of the selected account balance.
     *
     * `null` for the default account balance.
     *
     * @var string|null
     */
    public ?string $k_pay_method = null;

    /**
     * Email address to deliver the statement to.
     *
     * Empty string when `is_email` is `false`.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid_client' => $this->uid_client,
            'dl_end' => $this->dl_end,
            'dl_start' => $this->dl_start,
            'i_statement_number' => $this->i_statement_number,
            'is_email' => $this->is_email,
            'is_include_relationship' => $this->is_include_relationship,
            'is_mail_format' => $this->is_mail_format,
            'k_pay_method' => $this->k_pay_method,
            'text_mail' => $this->text_mail,
            ],
            static fn ($v) => $v !== null
        );
    }
}
