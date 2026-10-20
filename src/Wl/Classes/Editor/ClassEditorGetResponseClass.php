<?php

namespace WlSdk\Wl\Classes\Editor;

class ClassEditorGetResponseClass
{
    /**
     * Number of clients that may book each session of the class.
     *
     * Also, the number of tickets that may be sold for each session of a ticketed event.
     *
     * @var int|null
     */
    public ?int $i_capacity = null;

    /**
     * Type of the event.
     *
     * Only an event has a type of its own, so a class always keeps the default.
     *
     * @var int|null
     * @see \WlSdk\Wl\Classes\Edit\EventTypeEnum
     */
    public ?int $id_event_type = null;

    /**
     * Kind of note staff may take for a client visit.
     *
     * `0` stands for the notes being switched off.
     *
     * @var int|null
     * @see \WlSdk\Wl\Visit\Note\Sid\NoteSid
     */
    public ?int $id_note = null;

    /**
     * Virtual meeting provider of the class. `null` for an in-person class.
     *
     * @var int|null
     * @see \WlSdk\Wl\Virtual\VirtualProviderSid
     */
    public ?int $id_virtual_provider = null;

    /**
     * `true` if the class has policies of its own, `false` if it follows the policies of the business.
     *
     * The policies themselves are a block of the form that the server renders, see `a_block`.
     *
     * @var bool|null
     */
    public ?bool $is_config_business = null;

    /**
     * Settings that tell who may book the class.
     *
     * @var ClassEditorGetResponseClassAccess|null
     */
    public ?ClassEditorGetResponseClassAccess $o_access = null;

    /**
     * Settings of the way the class is attended.
     *
     * @var ClassEditorGetResponseClassAttendance|null
     */
    public ?ClassEditorGetResponseClassAttendance $o_attendance = null;

    /**
     * Settings that tell where the class is listed.
     *
     * @var ClassEditorGetResponseClassDiscovery|null
     */
    public ?ClassEditorGetResponseClassDiscovery $o_discovery = null;

    /**
     * Notification settings of the class.
     *
     * @var ClassEditorGetResponseClassNotification|null
     */
    public ?ClassEditorGetResponseClassNotification $o_notification = null;

    /**
     * Pricing settings of the class.
     *
     * @var ClassEditorGetResponseClassPrice|null
     */
    public ?ClassEditorGetResponseClassPrice $o_price = null;

    /**
     * Settings a ticketed event adds to the pricing settings.
     *
     * Only an event may be ticketed, so every field of this object is ignored for a class.
     *
     * @var ClassEditorGetResponseClassTicket|null
     */
    public ?ClassEditorGetResponseClassTicket $o_ticket = null;

    /**
     * Color of the class on the schedule in hex format.
     *
     * Empty string while the class has no color of its own.
     *
     * @var string|null
     */
    public ?string $s_color_background = null;

    /**
     * Description of the class.
     *
     * @var string|null
     */
    public ?string $s_description = null;

    /**
     * Special instructions of the class.
     *
     * @var string|null
     */
    public ?string $s_special = null;

    /**
     * Title of the class.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    /**
     * `true` if the special instructions may be shown publicly, `false` if only to a client who booked the class.
     *
     * @var bool|null
     */
    public ?bool $show_special_instructions = null;

    public function __construct(array $data)
    {
        $this->i_capacity = isset($data['i_capacity']) ? (int)$data['i_capacity'] : null;
        $this->id_event_type = isset($data['id_event_type']) ? (int)$data['id_event_type'] : null;
        $this->id_note = isset($data['id_note']) ? (int)$data['id_note'] : null;
        $this->id_virtual_provider = isset($data['id_virtual_provider']) ? (int)$data['id_virtual_provider'] : null;
        $this->is_config_business = isset($data['is_config_business']) ? (bool)$data['is_config_business'] : null;
        $this->o_access = isset($data['o_access']) ? new ClassEditorGetResponseClassAccess((array)$data['o_access']) : null;
        $this->o_attendance = isset($data['o_attendance']) ? new ClassEditorGetResponseClassAttendance((array)$data['o_attendance']) : null;
        $this->o_discovery = isset($data['o_discovery']) ? new ClassEditorGetResponseClassDiscovery((array)$data['o_discovery']) : null;
        $this->o_notification = isset($data['o_notification']) ? new ClassEditorGetResponseClassNotification((array)$data['o_notification']) : null;
        $this->o_price = isset($data['o_price']) ? new ClassEditorGetResponseClassPrice((array)$data['o_price']) : null;
        $this->o_ticket = isset($data['o_ticket']) ? new ClassEditorGetResponseClassTicket((array)$data['o_ticket']) : null;
        $this->s_color_background = isset($data['s_color_background']) ? (string)$data['s_color_background'] : null;
        $this->s_description = isset($data['s_description']) ? (string)$data['s_description'] : null;
        $this->s_special = isset($data['s_special']) ? (string)$data['s_special'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
        $this->show_special_instructions = isset($data['show_special_instructions']) ? (bool)$data['show_special_instructions'] : null;
    }
}
