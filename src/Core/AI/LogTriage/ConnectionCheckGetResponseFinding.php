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
     * CID of a {@link \WlSdk\Core\AI\LogTriage\TriageProblemAbstract} subclass.
     *
     * @var int|null
     * @see \WlSdk\Core\AI\LogTriage\TriageProblemAbstract
     */
    public ?int $cid_problem = null;

    /**
     * Usage-statistics object: a slash-delimited category and resource identifier, for example
     *   `'memcache/get/10.0.0.5'` or `'sql/select core_business'`. Present for the usage-statistics source.
     *
     * @var string|null
     */
    public ?string $s_object = null;

    /**
     * Usage-statistics aggregation period. One of {@link \WlSdk\Core\AI\LogTriage\TriageWatchUsagePeriodEnum}
     *   cases. Present for the usage-statistics source.
     *
     * @var int|null
     */
    public ?int $eid_period = null;

    /**
     * Usage-statistics urgency. One of {@link \WlSdk\Core\AI\LogTriage\TriageUrgencyEnum} cases. Present for
     *   the usage-statistics source.
     *
     * @var int|null
     */
    public ?int $eid_urgency = null;

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
        $this->cid_problem = isset($data['cid_problem']) ? (int)$data['cid_problem'] : null;
        $this->s_object = isset($data['s_object']) ? (string)$data['s_object'] : null;
        $this->eid_period = isset($data['eid_period']) ? (int)$data['eid_period'] : null;
        $this->eid_urgency = isset($data['eid_urgency']) ? (int)$data['eid_urgency'] : null;
        $this->text_message = isset($data['text_message']) ? (string)$data['text_message'] : null;
    }
}
