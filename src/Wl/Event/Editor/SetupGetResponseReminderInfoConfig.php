<?php

namespace WlSdk\Wl\Event\Editor;

class SetupGetResponseReminderInfoConfig
{
    /**
     * Number of the units of time the reminder is sent before the session.
     *
     * @var int|null
     */
    public ?int $i_before = null;

    /**
     * Unit of time the reminder is sent before the session. One of {@link \WlSdk\ADurationSid} constants.
     *
     * @var int|null
     * @see \WlSdk\ADurationSid
     */
    public ?int $id_duration_delay = null;

    /**
     * Title of the unit of time.
     *
     * @var string|null
     */
    public ?string $text_time = null;

    public function __construct(array $data)
    {
        $this->i_before = isset($data['i_before']) ? (int)$data['i_before'] : null;
        $this->id_duration_delay = isset($data['id_duration_delay']) ? (int)$data['id_duration_delay'] : null;
        $this->text_time = isset($data['text_time']) ? (string)$data['text_time'] : null;
    }
}
