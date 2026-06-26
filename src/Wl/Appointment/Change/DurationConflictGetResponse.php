<?php

namespace WlSdk\Wl\Appointment\Change;

/**
 * Response from GET
 */
class DurationConflictGetResponse
{
    /**
     * See for RsAppointmentEditConflict::checkAvailability() details.
     *
     * @var array[]|null
     */
    public ?array $a_conflict = null;

    /**
     * `true` if staff can book appointment when conflict. `false` in other cases.
     *
     * @var bool|null
     */
    public ?bool $can_book_anyway = null;

    /**
     * Staff book flow id, one of ServiceStaffBookFlowSid.
     *
     * @var int|null
     */
    public ?int $id_staff_book_flow = null;

    /**
     * Key of the business. Primary key from RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Location to show available appointment booking schedule.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Service primary key in RsServiceSql table.
     *
     * @var string|null
     */
    public ?string $k_service = null;

    /**
     * ID form.
     *
     * @var string|null
     */
    public ?string $s_form_id = null;

    /**
     * Selected user staff key.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    public function __construct(array $data)
    {
        $this->a_conflict = isset($data['a_conflict']) ? (array)$data['a_conflict'] : null;
        $this->can_book_anyway = isset($data['can_book_anyway']) ? (bool)$data['can_book_anyway'] : null;
        $this->id_staff_book_flow = isset($data['id_staff_book_flow']) ? (int)$data['id_staff_book_flow'] : null;
        $this->k_business = isset($data['k_business']) ? (string)$data['k_business'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->k_service = isset($data['k_service']) ? (string)$data['k_service'] : null;
        $this->s_form_id = isset($data['s_form_id']) ? (string)$data['s_form_id'] : null;
        $this->uid_staff = isset($data['uid_staff']) ? (string)$data['uid_staff'] : null;
    }
}
