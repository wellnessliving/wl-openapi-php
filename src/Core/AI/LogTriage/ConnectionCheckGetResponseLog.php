<?php

namespace WlSdk\Core\AI\LogTriage;

class ConnectionCheckGetResponseLog
{
    /**
     * Number of matching records.
     *
     * @var int|null
     */
    public ?int $i_occurrence_count = null;

    /**
     * Date of the first matching record.
     *
     * @var string|null
     */
    public ?string $s_first_seen = null;

    /**
     * Date of the last matching record.
     *
     * @var string|null
     */
    public ?string $s_last_seen = null;

    /**
     * Log message.
     *
     * @var string|null
     */
    public ?string $s_message = null;

    /**
     * Log source: `error` or `slow`.
     *
     * @var string|null
     */
    public ?string $s_source = null;

    public function __construct(array $data)
    {
        $this->i_occurrence_count = isset($data['i_occurrence_count']) ? (int)$data['i_occurrence_count'] : null;
        $this->s_first_seen = isset($data['s_first_seen']) ? (string)$data['s_first_seen'] : null;
        $this->s_last_seen = isset($data['s_last_seen']) ? (string)$data['s_last_seen'] : null;
        $this->s_message = isset($data['s_message']) ? (string)$data['s_message'] : null;
        $this->s_source = isset($data['s_source']) ? (string)$data['s_source'] : null;
    }
}
