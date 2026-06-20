<?php
namespace WlSdk\Wl\Schedule\ClassView;

/**
 * Response from GET
 */
class ClassViewGetResponse
{
    /**
     * No description.
     *
     * @var ClassViewGetResponseAsset[]|null
     */
    public ?array $a_asset = null;

    /**
     * No description.
     *
     * @var ClassViewGetResponseClass[]|null
     */
    public ?array $a_class = null;

    /**
     * No description.
     *
     * @var ClassViewGetResponseLocation[]|null
     */
    public ?array $a_location = null;

    /**
     * No description.
     *
     * @var ClassViewGetResponseSessionResult[]|null
     */
    public ?array $a_session_result = null;

    /**
     * No description.
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
     * No description.
     *
     * @var ClassViewGetResponseVisitsRequired[]|null
     */
    public ?array $a_visits_required = null;

    public function __construct(array $data)
    {
        $this->a_asset = isset($data['a_asset']) ? array_map(static fn($item) => new ClassViewGetResponseAsset((array)$item), (array)$data['a_asset']) : null;
        $this->a_class = isset($data['a_class']) ? array_map(static fn($item) => new ClassViewGetResponseClass((array)$item), (array)$data['a_class']) : null;
        $this->a_location = isset($data['a_location']) ? array_map(static fn($item) => new ClassViewGetResponseLocation((array)$item), (array)$data['a_location']) : null;
        $this->a_session_result = isset($data['a_session_result']) ? array_map(static fn($item) => new ClassViewGetResponseSessionResult((array)$item), (array)$data['a_session_result']) : null;
        $this->a_staff = isset($data['a_staff']) ? array_map(static fn($item) => new ClassViewGetResponseStaff((array)$item), (array)$data['a_staff']) : null;
        $this->a_virtual_location = isset($data['a_virtual_location']) ? (array)$data['a_virtual_location'] : null;
        $this->a_visits_required = isset($data['a_visits_required']) ? array_map(static fn($item) => new ClassViewGetResponseVisitsRequired((array)$item), (array)$data['a_visits_required']) : null;
    }
}
