<?php

namespace WlSdk\Wl\Schedule\ClassView;

/**
 * Response from GET
 */
class ClassViewGetResponse
{
    /**
     * Asset list data.
     *
     * @var ClassViewGetResponseAsset[]|null
     */
    public ?array $a_asset = null;

    /**
     * Detailed information about the class.
     *
     * This will be `null` if data isn't loaded yet.
     *
     * @var ClassViewGetResponseClass|null
     */
    public ?ClassViewGetResponseClass $a_class = null;

    /**
     * Location data.
     *
     * This will be `null` if data isn't loaded yet.
     *
     * @var ClassViewGetResponseLocation|null
     */
    public ?ClassViewGetResponseLocation $a_location = null;

    /**
     * A list of sessions with information, received in a multiple session mode.
     *
     * @var ClassViewGetResponseSessionResult[]|null
     */
    public ?array $a_session_result = null;

    /**
     * Staff member list data.
     *
     * This will be `null` if data isn't loaded yet.
     *
     * @var ClassViewGetResponseStaff[]|null
     */
    public ?array $a_staff = null;

    /**
     * List of other locations where virtual class can be booked.
     * Empty array if class isn't virtual or can't be booked in other locations.
     *
     * @var string[]|null
     */
    public ?array $a_virtual_location = null;

    /**
     * A list of classes and events that clients should visit before this one.
     *
     * @var ClassViewGetResponseVisitsRequired[]|null
     */
    public ?array $a_visits_required = null;

    public function __construct(array $data)
    {
        $this->a_asset = isset($data['a_asset']) ? array_map(static fn ($item) => new ClassViewGetResponseAsset((array)$item), (array)$data['a_asset']) : null;
        $this->a_class = isset($data['a_class']) ? new ClassViewGetResponseClass((array)$data['a_class']) : null;
        $this->a_location = isset($data['a_location']) ? new ClassViewGetResponseLocation((array)$data['a_location']) : null;
        $this->a_session_result = isset($data['a_session_result']) ? array_map(static fn ($item) => new ClassViewGetResponseSessionResult((array)$item), (array)$data['a_session_result']) : null;
        $this->a_staff = isset($data['a_staff']) ? array_map(static fn ($item) => new ClassViewGetResponseStaff((array)$item), (array)$data['a_staff']) : null;
        $this->a_virtual_location = isset($data['a_virtual_location']) ? (array)$data['a_virtual_location'] : null;
        $this->a_visits_required = isset($data['a_visits_required']) ? array_map(static fn ($item) => new ClassViewGetResponseVisitsRequired((array)$item), (array)$data['a_visits_required']) : null;
    }
}
