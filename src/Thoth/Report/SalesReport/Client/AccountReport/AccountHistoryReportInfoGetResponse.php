<?php

namespace WlSdk\Thoth\Report\SalesReport\Client\AccountReport;

/**
 * Response from GET
 */
class AccountHistoryReportInfoGetResponse
{
    /**
     * Whether the client is currently a payer (has entries in RsFamilyPayAr).
     *
     * When `true`, the toggle is shown and defaults to on.
     *
     * @var bool|null
     */
    public ?bool $is_payer = null;

    /**
     * Whether the client has at least one past account transaction paid on behalf of a relationship member.
     *
     * Meaningful only when `is_payer` is `false`.
     * When `true`, the toggle is shown but defaults to off.
     *
     * @var bool|null
     */
    public ?bool $is_payer_has_history = null;

    /**
     * Full name of the user who pays for this client.
     *
     * Empty string when the client pays for themselves.
     *
     * @var string|null
     */
    public ?string $text_payer_name = null;

    /**
     * UID of the user who pays for this client. Primary key in PassportLoginSql.
     *
     * Empty string when the client pays for themselves.
     *
     * @var string|null
     */
    public ?string $uid_payer = null;

    /**
     * URL of the payer's Balance History and Statements page.
     *
     * Empty string when the client pays for themselves.
     *
     * @var string|null
     */
    public ?string $url_payer_balance_history = null;

    /**
     * URL of the payer's Statement History tab on the Balance History and Statements page.
     *
     * Empty string when the client pays for themselves.
     *
     * @var string|null
     */
    public ?string $url_payer_statement_history = null;

    public function __construct(array $data)
    {
        $this->is_payer = isset($data['is_payer']) ? (bool)$data['is_payer'] : null;
        $this->is_payer_has_history = isset($data['is_payer_has_history']) ? (bool)$data['is_payer_has_history'] : null;
        $this->text_payer_name = isset($data['text_payer_name']) ? (string)$data['text_payer_name'] : null;
        $this->uid_payer = isset($data['uid_payer']) ? (string)$data['uid_payer'] : null;
        $this->url_payer_balance_history = isset($data['url_payer_balance_history']) ? (string)$data['url_payer_balance_history'] : null;
        $this->url_payer_statement_history = isset($data['url_payer_statement_history']) ? (string)$data['url_payer_statement_history'] : null;
    }
}
