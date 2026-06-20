<?php
namespace WlSdk\Wl\Classes\ClassList;

class BookListGetResponseClass
{
    /**
     * The list of class tab keys for the class.
     *
     * @var string[]|null
     */
    public ?array $a_class_tab = null;

    /**
     * List of login types for current class.
     *
     * @var string[]|null
     */
    public ?array $a_login_type = null;

    /**
     * List of member groups for current class.
     *
     * @var string[]|null
     */
    public ?array $a_member_group = null;

    /**
     * The list of URL to book this class.
     *
     * @var string[]|null
     */
    public ?array $a_url_book = null;

    /**
     * The book date of an event in UTC date/time format. Can be empty string if user cannot book the event.
     *
     * @var string|null
     */
    public ?string $dtu_book_date = null;

    /**
     * Class capacity.
     *
     * @var int|null
     */
    public ?int $i_capacity = null;

    /**
     * Bookable type ID. One of {@link \WlSdk\Wl\Service\BookableSid} constants.
     *
     * @var int|null
     */
    public ?int $id_bookable = null;

    /**
     * This will be `true` if the class is active. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    /**
     * This will be `true` for events. Otherwise, this will be `false` for classes.
     *
     * @var bool|null
     */
    public ?bool $is_event = null;

    /**
     * `true` means to show class only for clients who can book online,
     * `false` means to show class for all clients.
     *
     * @var bool|null
     */
    public ?bool $is_online_private = null;

    /**
     * The class key.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    /**
     * The enrollment block key.
     *
     * @var string|null
     */
    public ?string $k_enrollment_block = null;

    /**
     * The total price for an event.
     *
     * @var string|null
     */
    public ?string $m_price_total = null;

    /**
     * The class description.
     *
     * @var string|null
     */
    public ?string $text_description = null;

    /**
     * The class name.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->a_class_tab = isset($data['a_class_tab']) ? (array)$data['a_class_tab'] : null;
        $this->a_login_type = isset($data['a_login_type']) ? (array)$data['a_login_type'] : null;
        $this->a_member_group = isset($data['a_member_group']) ? (array)$data['a_member_group'] : null;
        $this->a_url_book = isset($data['a_url_book']) ? (array)$data['a_url_book'] : null;
        $this->dtu_book_date = isset($data['dtu_book_date']) ? (string)$data['dtu_book_date'] : null;
        $this->i_capacity = isset($data['i_capacity']) ? (int)$data['i_capacity'] : null;
        $this->id_bookable = isset($data['id_bookable']) ? (int)$data['id_bookable'] : null;
        $this->is_active = isset($data['is_active']) ? (bool)$data['is_active'] : null;
        $this->is_event = isset($data['is_event']) ? (bool)$data['is_event'] : null;
        $this->is_online_private = isset($data['is_online_private']) ? (bool)$data['is_online_private'] : null;
        $this->k_class = isset($data['k_class']) ? (string)$data['k_class'] : null;
        $this->k_enrollment_block = isset($data['k_enrollment_block']) ? (string)$data['k_enrollment_block'] : null;
        $this->m_price_total = isset($data['m_price_total']) ? (string)$data['m_price_total'] : null;
        $this->text_description = isset($data['text_description']) ? (string)$data['text_description'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
