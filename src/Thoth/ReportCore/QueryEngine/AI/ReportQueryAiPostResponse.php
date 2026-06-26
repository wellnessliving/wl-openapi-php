<?php

namespace WlSdk\Thoth\ReportCore\QueryEngine\AI;

/**
 * Response from POST
 */
class ReportQueryAiPostResponse
{
    /**
     * AI-generated Actions JSON string, or empty string if no change is needed.
     *
     * @var string|null
     */
    public ?string $json_actions = null;

    /**
     * AI-generated Totals JSON string, or empty string if no totals are needed.
     *
     * @var string|null
     */
    public ?string $json_totals = null;

    /**
     * AI text answer for informational queries (capability questions, field explanations,
     *  responses when requested data is unavailable).
     * Empty string when the response is SQL-only or when no explanation is needed.
     *
     * @var string|null
     */
    public ?string $s_answer = null;

    /**
     * Intent the AI model detected for this request. One of `'sql'` (SQL generation
     *  or modification), `'capabilities'` (user asked what data is available), or
     *  `'out_of_scope'` (request is outside the `QueryEngine` module).
     * Useful for client-side logging and optional history filtering.
     *
     * @var string|null
     */
    public ?string $s_intent = null;

    /**
     * Optional clarification question from the AI model.
     * Empty string when the model generated SQL without needing clarification.
     *
     * @var string|null
     */
    public ?string $s_question = null;

    /**
     * AI-generated SELECT query. Empty string means "no change" -- current SQL is preserved.
     *
     * @var string|null
     */
    public ?string $s_sql = null;

    public function __construct(array $data)
    {
        $this->json_actions = isset($data['json_actions']) ? (string)$data['json_actions'] : null;
        $this->json_totals = isset($data['json_totals']) ? (string)$data['json_totals'] : null;
        $this->s_answer = isset($data['s_answer']) ? (string)$data['s_answer'] : null;
        $this->s_intent = isset($data['s_intent']) ? (string)$data['s_intent'] : null;
        $this->s_question = isset($data['s_question']) ? (string)$data['s_question'] : null;
        $this->s_sql = isset($data['s_sql']) ? (string)$data['s_sql'] : null;
    }
}
