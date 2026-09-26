<?php

namespace WlSdk\Core\AI\LogTriage;

class ConnectionCheckGetResponseFinding
{
    /**
     * Date of the first usage-statistics record.
     *
     * @var string|null
     */
    public ?string $dl_first_seen = null;

    /**
     * Date of the last usage-statistics record.
     *
     * @var string|null
     */
    public ?string $dl_last_seen = null;

    /**
     * UTC date/time of the first matching log or async-task record. Empty for background tasks.
     *
     * @var string|null
     */
    public ?string $dtu_first_seen = null;

    /**
     * UTC date/time of the last matching log or async-task record. Empty for background tasks.
     *
     * @var string|null
     */
    public ?string $dtu_last_seen = null;

    /**
     * Number of matching records.
     *
     * @var int|null
     */
    public ?int $i_occurrence_count = null;

    /**
     * Usage-statistics priority multiplier. Present for the usage-statistics source.
     *
     * @var int|null
     */
    public ?int $i_priority_multiplier = null;

    /**
     * CID of a {@link \WlSdk\Core\AI\LogTriage\TriageProblemAbstract} subclass.
     *
     * @var int|null
     * @see \WlSdk\Core\AI\LogTriage\TriageProblemAbstract
     */
    public ?int $cid_source = null;

    /**
     * Usage-statistics object. Present for the usage-statistics source.
     *
     * @var string|null
     */
    public ?string $s_object = null;

    /**
     * Usage-statistics aggregation period. Present for the usage-statistics source.
     *
     * @var string|null
     */
    public ?string $s_period = null;

    /**
     * Usage-statistics priority. Present for the usage-statistics source.
     *
     * @var string|null
     */
    public ?string $s_priority = null;

    /**
     * Log message or task description. Present for log and task sources.
     *
     * @var string|null
     */
    public ?string $text_message = null;

    public function __construct(array $data)
    {
        $this->dl_first_seen = isset($data['dl_first_seen']) ? (string)$data['dl_first_seen'] : null;
        $this->dl_last_seen = isset($data['dl_last_seen']) ? (string)$data['dl_last_seen'] : null;
        $this->dtu_first_seen = isset($data['dtu_first_seen']) ? (string)$data['dtu_first_seen'] : null;
        $this->dtu_last_seen = isset($data['dtu_last_seen']) ? (string)$data['dtu_last_seen'] : null;
        $this->i_occurrence_count = isset($data['i_occurrence_count']) ? (int)$data['i_occurrence_count'] : null;
        $this->i_priority_multiplier = isset($data['i_priority_multiplier']) ? (int)$data['i_priority_multiplier'] : null;
        $this->cid_source = isset($data['cid_source']) ? (int)$data['cid_source'] : null;
        $this->s_object = isset($data['s_object']) ? (string)$data['s_object'] : null;
        $this->s_period = isset($data['s_period']) ? (string)$data['s_period'] : null;
        $this->s_priority = isset($data['s_priority']) ? (string)$data['s_priority'] : null;
        $this->text_message = isset($data['text_message']) ? (string)$data['text_message'] : null;
    }
}
