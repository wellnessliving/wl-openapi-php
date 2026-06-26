<?php

namespace WlSdk\Thoth\ReportCore\QueryEngine\AI;

class ReportQueryAiPostRequest
{
    /**
     * Business key. Primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Optional key of the report query being edited. Empty string when the user is
     *  building a new report that has not been saved yet.
     * Used only to bind the AI prompt log entry to the corresponding registry record.
     *
     * @var string|null
     */
    public ?string $k_report_query = null;

    /**
     * Current Actions JSON from the report form. Sent as context so the AI can
     *  refine existing actions rather than starting from scratch.
     * Empty string if the form has no actions configured.
     *
     * @var string|null
     */
    public ?string $json_actions_in = null;

    /**
     * Conversation history as a JSON-encoded array of message objects.
     * Each element must have `s_role` ('user' or 'assistant') and `s_content` (string).
     * Empty string or omitted means no prior history (first request).
     *
     * @var string|null
     */
    public ?string $json_history = null;

    /**
     * Current Totals JSON from the report form. Sent as context so the AI can
     *  refine existing totals rather than starting from scratch.
     * Empty string if the form has no totals configured.
     *
     * @var string|null
     */
    public ?string $json_totals_in = null;

    /**
     * User's natural-language description of the desired report.
     * Example: "Show all users who paid more than 50 dollars this month".
     *
     * @var string|null
     */
    public ?string $s_prompt = null;

    /**
     * Client-generated session identifier that groups all AI prompt log entries from a single
     *  conversation. Generated once when the AI panel opens and passed unchanged in every
     *  subsequent request within that session.
     * Empty string if the client did not supply one.
     *
     * @var string|null
     */
    public ?string $s_session_ai = null;

    /**
     * Current SQL query from the report editor. Sent as context so the AI can
     *  modify an existing query rather than starting from scratch.
     * Empty string for a new report.
     *
     * @var string|null
     */
    public ?string $s_sql_in = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_report_query' => $this->k_report_query,
            'json_actions_in' => $this->json_actions_in,
            'json_history' => $this->json_history,
            'json_totals_in' => $this->json_totals_in,
            's_prompt' => $this->s_prompt,
            's_session_ai' => $this->s_session_ai,
            's_sql_in' => $this->s_sql_in,
            ],
            static fn ($v) => $v !== null
        );
    }
}
