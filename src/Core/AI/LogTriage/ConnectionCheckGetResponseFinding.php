<?php

namespace WlSdk\Core\AI\LogTriage;

class ConnectionCheckGetResponseFinding
{
    /**
     * Number of matching records.
     *
     * @var int|null
     */
    public ?int $i_occurrence_count = null;

    /**
     * Finding source from {@link \WlSdk\Core\AI\LogTriage\TriageSourceSid}.
     *
     * @var int|null
     * @see \WlSdk\Core\AI\LogTriage\TriageSourceSid
     */
    public ?int $id_source = null;

    /**
     * Log message or task description. Present for log and task sources.
     *
     * @var string|null
     */
    public ?string $text_message = null;

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
     * WatchUsageStat object. Present for this source.
     *
     * @var string|null
     */
    public ?string $s_object = null;

    /**
     * Local date of the first WatchUsageStat record.
     *
     * @var string|null
     */
    public ?string $dl_first_seen = null;

    /**
     * Local date of the last WatchUsageStat record.
     *
     * @var string|null
     */
    public ?string $dl_last_seen = null;

    public function __construct(array $data)
    {
        $this->i_occurrence_count = isset($data['i_occurrence_count']) ? (int)$data['i_occurrence_count'] : null;
        $this->id_source = isset($data['id_source']) ? (int)$data['id_source'] : null;
        $this->text_message = isset($data['text_message']) ? (string)$data['text_message'] : null;
        $this->dtu_first_seen = isset($data['dtu_first_seen']) ? (string)$data['dtu_first_seen'] : null;
        $this->dtu_last_seen = isset($data['dtu_last_seen']) ? (string)$data['dtu_last_seen'] : null;
        $this->s_object = isset($data['s_object']) ? (string)$data['s_object'] : null;
        $this->dl_first_seen = isset($data['dl_first_seen']) ? (string)$data['dl_first_seen'] : null;
        $this->dl_last_seen = isset($data['dl_last_seen']) ? (string)$data['dl_last_seen'] : null;
    }
}
