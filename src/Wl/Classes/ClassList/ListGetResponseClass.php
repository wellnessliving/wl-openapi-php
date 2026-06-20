<?php
namespace WlSdk\Wl\Classes\ClassList;

class ListGetResponseClass
{
    /**
     * List of class book now tabs, where this class is presented. Each element is 
     *  or `null` if class is presented in default system tab Classes. Events can also be added in class tabs.
     *
     * @var string[]|null
     */
    public ?array $a_class_tab = null;

    /**
     * List of event book now tabs, where this event is presented. Each element is 
     *   or `null` if event is presented in default system tab Enrollments. Classes cannot be added in event tabs.
     *
     * @var string[]|null
     */
    public ?array $a_event_tab = null;

    /**
     * The ending date of the class/event.
     * Maybe a zero date if the class is ongoing (has no end date).
     *
     * @var string|null
     */
    public ?string $dl_end = null;

    /**
     * The starting date of the class/event.
     *
     * @var string|null
     */
    public ?string $dl_start = null;

    /**
     * Whether class/event is active.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    /**
     * Define if current element is event.`true` - event, `false` - class.
     *
     * @var bool|null
     */
    public ?bool $is_event = null;

    /**
     * Whether class/event is removed.
     *
     * @var bool|null
     */
    public ?bool $is_remove = null;

    /**
     * Class/event identifier.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    /**
     * Event Block ID.
     *
     * @var string|null
     */
    public ?string $k_enrollment_block = null;

    /**
     * Class/event name.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->a_class_tab = isset($data['a_class_tab']) ? (array)$data['a_class_tab'] : null;
        $this->a_event_tab = isset($data['a_event_tab']) ? (array)$data['a_event_tab'] : null;
        $this->dl_end = isset($data['dl_end']) ? (string)$data['dl_end'] : null;
        $this->dl_start = isset($data['dl_start']) ? (string)$data['dl_start'] : null;
        $this->is_active = isset($data['is_active']) ? (bool)$data['is_active'] : null;
        $this->is_event = isset($data['is_event']) ? (bool)$data['is_event'] : null;
        $this->is_remove = isset($data['is_remove']) ? (bool)$data['is_remove'] : null;
        $this->k_class = isset($data['k_class']) ? (string)$data['k_class'] : null;
        $this->k_enrollment_block = isset($data['k_enrollment_block']) ? (string)$data['k_enrollment_block'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
