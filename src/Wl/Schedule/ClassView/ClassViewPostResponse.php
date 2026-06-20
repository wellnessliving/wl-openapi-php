<?php
namespace WlSdk\Wl\Schedule\ClassView;

/**
 * Response from POST
 */
class ClassViewPostResponse
{
    /**
     * No description.
     *
     * @var ClassViewPostResponseAsset[]|null
     */
    public ?array $a_asset = null;

    /**
     * No description.
     *
     * @var ClassViewPostResponseClass[]|null
     */
    public ?array $a_class = null;

    /**
     * No description.
     *
     * @var ClassViewPostResponseLocation[]|null
     */
    public ?array $a_location = null;

    /**
     * No description.
     *
     * @var ClassViewPostResponseSessionResult[]|null
     */
    public ?array $a_session_result = null;

    /**
     * No description.
     *
     * @var ClassViewPostResponseStaff[]|null
     */
    public ?array $a_staff = null;

    /**
     * List of other locations where virtual class can be booked.
     * Empty array if class isn't virtual or can't be booked in other locations.
     *
     * @var string[]|null
     */
    public ?array $a_virtual_location = null;

    public function __construct(array $data)
    {
        $this->a_asset = isset($data['a_asset']) ? array_map(static fn($item) => new ClassViewPostResponseAsset((array)$item), (array)$data['a_asset']) : null;
        $this->a_class = isset($data['a_class']) ? array_map(static fn($item) => new ClassViewPostResponseClass((array)$item), (array)$data['a_class']) : null;
        $this->a_location = isset($data['a_location']) ? array_map(static fn($item) => new ClassViewPostResponseLocation((array)$item), (array)$data['a_location']) : null;
        $this->a_session_result = isset($data['a_session_result']) ? array_map(static fn($item) => new ClassViewPostResponseSessionResult((array)$item), (array)$data['a_session_result']) : null;
        $this->a_staff = isset($data['a_staff']) ? array_map(static fn($item) => new ClassViewPostResponseStaff((array)$item), (array)$data['a_staff']) : null;
        $this->a_virtual_location = isset($data['a_virtual_location']) ? (array)$data['a_virtual_location'] : null;
    }
}
