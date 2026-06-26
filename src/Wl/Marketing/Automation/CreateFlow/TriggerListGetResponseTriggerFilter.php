<?php

namespace WlSdk\Wl\Marketing\Automation\CreateFlow;

class TriggerListGetResponseTriggerFilter
{
    /**
     * ID of the trigger type in {@link \WlSdk\Wl\Marketing\Automation\CreateFlow\TriggerTypeSid}.
     *
     * @var int|null
     * @see \WlSdk\Wl\Marketing\Automation\CreateFlow\TriggerTypeSid
     */
    public ?int $id_trigger = null;

    /**
     * Count of triggers in this type.
     *
     * @var int|null
     */
    public ?int $i_count = null;

    /**
     * Title of the trigger type.
     *
     * @var string|null
     */
    public ?string $text_trigger_type = null;

    public function __construct(array $data)
    {
        $this->id_trigger = isset($data['id_trigger']) ? (int)$data['id_trigger'] : null;
        $this->i_count = isset($data['i_count']) ? (int)$data['i_count'] : null;
        $this->text_trigger_type = isset($data['text_trigger_type']) ? (string)$data['text_trigger_type'] : null;
    }
}
