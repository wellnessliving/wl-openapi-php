<?php

namespace WlSdk\Wl\Classes\Period\Info;

/**
 * Response from GET
 */
class ClassPeriodGetResponse
{
    /**
     * Information for available action with class session for current user:
     *
     * @var ClassPeriodGetResponseAction|null
     */
    public ?ClassPeriodGetResponseAction $a_action = null;

    /**
     * Staff who conduct session. Every element has keys:
     *
     * @var ClassPeriodGetResponseStaff[]|null
     */
    public ?array $a_staff = null;

    /**
     * Description of the class.
     *
     * @var string|null
     */
    public ?string $html_description = null;

    /**
     * Class special instructions.
     *
     * @var string|null
     */
    public ?string $html_special = null;

    /**
     * Class capacity.
     *
     * `null` if the business set capacity to be hide.
     *
     * @var int|null
     */
    public ?int $i_capacity = null;

    /**
     * Class session free spot.
     *
     * `null` if the business set capacity to be hide.
     *
     * @var int|null
     */
    public ?int $i_free = null;

    /**
     * Whether this class is event or not.
     *
     * @var bool|null
     */
    public ?bool $is_event = null;

    /**
     * Whether this class is virtual or not.
     *
     * @var bool|null
     */
    public ?bool $is_virtual = null;

    /**
     * Date of the session in user-friendly format.
     *
     * @var string|null
     */
    public ?string $text_day = null;

    /**
     * Class session duration.
     *
     * @var string|null
     */
    public ?string $text_duration = null;

    /**
     * Class session room number.
     *
     * @var string|null
     */
    public ?string $text_room = null;

    /**
     * Class session time in user-friendly format.
     *
     * @var string|null
     */
    public ?string $text_time = null;

    /**
     * Class session timezone abbreviation.
     *
     * Empty if business disable ability to change timezone in the client profile.
     *
     * @var string|null
     */
    public ?string $text_timezone = null;

    /**
     * Class title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * Url link to the class image.
     *
     * @var string|null
     */
    public ?string $url_image = null;

    public function __construct(array $data)
    {
        $this->a_action = isset($data['a_action']) ? new ClassPeriodGetResponseAction((array)$data['a_action']) : null;
        $this->a_staff = isset($data['a_staff']) ? array_map(static fn ($item) => new ClassPeriodGetResponseStaff((array)$item), (array)$data['a_staff']) : null;
        $this->html_description = isset($data['html_description']) ? (string)$data['html_description'] : null;
        $this->html_special = isset($data['html_special']) ? (string)$data['html_special'] : null;
        $this->i_capacity = isset($data['i_capacity']) ? (int)$data['i_capacity'] : null;
        $this->i_free = isset($data['i_free']) ? (int)$data['i_free'] : null;
        $this->is_event = isset($data['is_event']) ? (bool)$data['is_event'] : null;
        $this->is_virtual = isset($data['is_virtual']) ? (bool)$data['is_virtual'] : null;
        $this->text_day = isset($data['text_day']) ? (string)$data['text_day'] : null;
        $this->text_duration = isset($data['text_duration']) ? (string)$data['text_duration'] : null;
        $this->text_room = isset($data['text_room']) ? (string)$data['text_room'] : null;
        $this->text_time = isset($data['text_time']) ? (string)$data['text_time'] : null;
        $this->text_timezone = isset($data['text_timezone']) ? (string)$data['text_timezone'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->url_image = isset($data['url_image']) ? (string)$data['url_image'] : null;
    }
}
