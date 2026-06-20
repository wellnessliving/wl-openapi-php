<?php
namespace WlSdk\Wl\Profile\Alert;

class AlertGetResponseWarning
{
    /**
     * The list of location keys where this note is flagged.
     *
     * @var string[]|null
     */
    public ?array $a_location_flag = null;

    /**
     * The date and time in MySQL format in local time when the warning was created.
     *
     * @var bool|null
     */
    public ?bool $dt_create = null;

    /**
     * The date and time in MySQL format in local time when the warning was last modified.
     *
     * @var bool|null
     */
    public ?bool $dt_date = null;

    /**
     * `true` means that client is restricted to make bookings, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_book_restricted = null;

    /**
     * This will be `true` if the client is flagged. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_flag = null;

    /**
     * `true` means that client is restricted to make purchases. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_purchase_restricted = null;

    /**
     * This will be `true` if the warning was added today. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_today = null;

    /**
     * The text of the warning.
     *
     * @var string|null
     */
    public ?string $s_text = null;

    /**
     * Staff name, who created a note.
     *
     * @var string|null
     */
    public ?string $text_author = null;

    /**
     * Staff name, who edited a note last time.
     *
     * @var string|null
     */
    public ?string $text_editor = null;

    public function __construct(array $data)
    {
        $this->a_location_flag = isset($data['a_location_flag']) ? (array)$data['a_location_flag'] : null;
        $this->dt_create = isset($data['dt_create']) ? (bool)$data['dt_create'] : null;
        $this->dt_date = isset($data['dt_date']) ? (bool)$data['dt_date'] : null;
        $this->is_book_restricted = isset($data['is_book_restricted']) ? (bool)$data['is_book_restricted'] : null;
        $this->is_flag = isset($data['is_flag']) ? (bool)$data['is_flag'] : null;
        $this->is_purchase_restricted = isset($data['is_purchase_restricted']) ? (bool)$data['is_purchase_restricted'] : null;
        $this->is_today = isset($data['is_today']) ? (bool)$data['is_today'] : null;
        $this->s_text = isset($data['s_text']) ? (string)$data['s_text'] : null;
        $this->text_author = isset($data['text_author']) ? (string)$data['text_author'] : null;
        $this->text_editor = isset($data['text_editor']) ? (string)$data['text_editor'] : null;
    }
}
