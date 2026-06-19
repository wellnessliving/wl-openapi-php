<?php
namespace WlSdk\Wl\Appointment\Book\Staff;

/**
 * Response from GET
 */
class ListGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_staff = null;

    /**
     * Can staff booked unavailable staff.
     *
     * @var bool|null
     */
    public ?bool $can_book_unavailable_staff = null;

    /**
     * Determines whether to select the staff member's gender for the appointment.
     *
     * @var bool|null
     */
    public ?bool $has_gender = null;

    /**
     * Determines whether to select staff member(s) for the appointment.
     *
     * @var bool|null
     */
    public ?bool $has_staff = null;

    /**
     * Determines if the staff list has male and female members.
     *
     * @var bool|null
     */
    public ?bool $is_gender_different = null;

    public function __construct(array $data)
    {
        $this->a_staff = isset($data['a_staff']) ? (array)$data['a_staff'] : null;
        $this->can_book_unavailable_staff = isset($data['can_book_unavailable_staff']) ? (bool)$data['can_book_unavailable_staff'] : null;
        $this->has_gender = isset($data['has_gender']) ? (bool)$data['has_gender'] : null;
        $this->has_staff = isset($data['has_staff']) ? (bool)$data['has_staff'] : null;
        $this->is_gender_different = isset($data['is_gender_different']) ? (bool)$data['is_gender_different'] : null;
    }
}
