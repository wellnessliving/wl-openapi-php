<?php
namespace WlSdk\Wl\Book\Process\Info;

class Info54GetResponseSessionAll
{
    /**
     * List of staff names that are leading this session.
     *
     * @var string[]|null
     */
    public ?array $a_staff = null;

    /**
     * List of virtual locations.
     *
     * @var string[]|null
     */
    public ?array $a_virtual_location = null;

    /**
     * The date/time when session starts in MySQL format and in GMT.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * Total number of clients on the active list.
     *
     * @var int|null
     */
    public ?int $i_active = null;

    /**
     * Total capacity of the active list.
     *
     * @var int|null
     */
    public ?int $i_active_limit = null;

    /**
     * Duration of a service.
     *
     * @var int|null
     */
    public ?int $i_duration = null;

    /**
     * Total number of clients on the wait list.
     *
     * @var int|null
     */
    public ?int $i_wait = null;

    /**
     * Total capacity the wait list. `null` if wail list in unlimited. `0` if wait list is disabled.
     *
     * @var int|null
     */
    public ?int $i_wait_limit = null;

    /**
     * `true` if this session should be selected when page is initialized;
     * `false` if otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_select = null;

    /**
     * `true` if client is added to a wait list, `false` - to an active list.
     *
     * @var bool|null
     */
    public ?bool $is_wait = null;

    /**
     * Allow clients to join the wait list unpaid.
     *
     * @var bool|null
     */
    public ?bool $is_wait_list_unpaid = null;

    /**
     * The key of the session.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * Location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Price of the session.
     *
     * @var string|null
     */
    public ?string $m_price = null;

    /**
     * The name of the location where the session occurred.
     *
     * @var string|null
     */
    public ?string $s_location = null;

    /**
     * The date/time when the session starts in human-readable format.
     * Returned in the time zone of the location.
     *
     * @var string|null
     */
    public ?string $s_start = null;

    /**
     * String representation of session duration.
     *
     * @var string|null
     */
    public ?string $text_duration = null;

    public function __construct(array $data)
    {
        $this->a_staff = isset($data['a_staff']) ? (array)$data['a_staff'] : null;
        $this->a_virtual_location = isset($data['a_virtual_location']) ? (array)$data['a_virtual_location'] : null;
        $this->dt_date = isset($data['dt_date']) ? (string)$data['dt_date'] : null;
        $this->i_active = isset($data['i_active']) ? (int)$data['i_active'] : null;
        $this->i_active_limit = isset($data['i_active_limit']) ? (int)$data['i_active_limit'] : null;
        $this->i_duration = isset($data['i_duration']) ? (int)$data['i_duration'] : null;
        $this->i_wait = isset($data['i_wait']) ? (int)$data['i_wait'] : null;
        $this->i_wait_limit = isset($data['i_wait_limit']) ? (int)$data['i_wait_limit'] : null;
        $this->is_select = isset($data['is_select']) ? (bool)$data['is_select'] : null;
        $this->is_wait = isset($data['is_wait']) ? (bool)$data['is_wait'] : null;
        $this->is_wait_list_unpaid = isset($data['is_wait_list_unpaid']) ? (bool)$data['is_wait_list_unpaid'] : null;
        $this->k_class_period = isset($data['k_class_period']) ? (string)$data['k_class_period'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->m_price = isset($data['m_price']) ? (string)$data['m_price'] : null;
        $this->s_location = isset($data['s_location']) ? (string)$data['s_location'] : null;
        $this->s_start = isset($data['s_start']) ? (string)$data['s_start'] : null;
        $this->text_duration = isset($data['text_duration']) ? (string)$data['text_duration'] : null;
    }
}
