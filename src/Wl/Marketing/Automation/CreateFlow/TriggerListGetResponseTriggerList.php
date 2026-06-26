<?php

namespace WlSdk\Wl\Marketing\Automation\CreateFlow;

class TriggerListGetResponseTriggerList
{
    /**
     * ID of the mail in {@link \WlSdk\RsMailSid}.
     *  `null` if no mail is associated with the trigger.
     *
     * @var int|null
     * @see \WlSdk\RsMailSid
     */
    public ?int $id_mail = null;

    /**
     * ID of the trigger in {@link \WlSdk\Wl\Marketing\Automation\TriggerSid}.
     *
     * @var int|null
     * @see \WlSdk\Wl\Marketing\Automation\TriggerSid
     */
    public ?int $id_trigger = null;

    /**
     * ID of the trigger type in {@link \WlSdk\Wl\Marketing\Automation\CreateFlow\TriggerTypeSid}.
     *
     * @var int|null
     * @see \WlSdk\Wl\Marketing\Automation\CreateFlow\TriggerTypeSid
     */
    public ?int $id_trigger_type = null;

    /**
     * Whether the trigger has 'Coming soon' label TriggerAbstract::IS_COMING_SOON.
     *
     * @var bool|null
     */
    public ?bool $is_coming_soon = null;

    /**
     * Description of the trigger for the list of all triggers.
     *
     * @var string|null
     */
    public ?string $text_description_list = null;

    /**
     * Description of the trigger for the setup trigger view.
     *
     * @var string|null
     */
    public ?string $text_description_setup = null;

    /**
     * CSS class of the icon representing the trigger.
     *
     * @var string|null
     */
    public ?string $text_icon = null;

    /**
     * Title of the trigger.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->id_mail = isset($data['id_mail']) ? (int)$data['id_mail'] : null;
        $this->id_trigger = isset($data['id_trigger']) ? (int)$data['id_trigger'] : null;
        $this->id_trigger_type = isset($data['id_trigger_type']) ? (int)$data['id_trigger_type'] : null;
        $this->is_coming_soon = isset($data['is_coming_soon']) ? (bool)$data['is_coming_soon'] : null;
        $this->text_description_list = isset($data['text_description_list']) ? (string)$data['text_description_list'] : null;
        $this->text_description_setup = isset($data['text_description_setup']) ? (string)$data['text_description_setup'] : null;
        $this->text_icon = isset($data['text_icon']) ? (string)$data['text_icon'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
