<?php
namespace WlSdk\Wl\Schedule\ClassView;

class ClassViewGetResponseSessionResult
{
    /**
     * Array of asset.
     *
     * @var ClassViewGetResponseSessionResultAsset|null
     */
    public ?ClassViewGetResponseSessionResultAsset $a_asset = null;

    /**
     * Class information.
     *
     * @var ClassViewGetResponseSessionResultClass|null
     */
    public ?ClassViewGetResponseSessionResultClass $a_class = null;

    /**
     * Location info.
     *
     * @var ClassViewGetResponseSessionResultLocation|null
     */
    public ?ClassViewGetResponseSessionResultLocation $a_location = null;

    /**
     * Staff list.
     *
     * @var ClassViewGetResponseSessionResultStaff|null
     */
    public ?ClassViewGetResponseSessionResultStaff $a_staff = null;

    /**
     * List of other locations where virtual class can be booked.
     * Empty array if class isn't virtual or can't be booked in other locations.
     *
     * @var string[]|null
     */
    public ?array $a_virtual_location = null;

    /**
     * List of classes and events, which client should visit before this one.
     *
     * @var ClassViewGetResponseSessionResultVisitsRequired|null
     */
    public ?ClassViewGetResponseSessionResultVisitsRequired $a_visits_required = null;

    public function __construct(array $data)
    {
        $this->a_asset = isset($data['a_asset']) ? new ClassViewGetResponseSessionResultAsset((array)$data['a_asset']) : null;
        $this->a_class = isset($data['a_class']) ? new ClassViewGetResponseSessionResultClass((array)$data['a_class']) : null;
        $this->a_location = isset($data['a_location']) ? new ClassViewGetResponseSessionResultLocation((array)$data['a_location']) : null;
        $this->a_staff = isset($data['a_staff']) ? new ClassViewGetResponseSessionResultStaff((array)$data['a_staff']) : null;
        $this->a_virtual_location = isset($data['a_virtual_location']) ? (array)$data['a_virtual_location'] : null;
        $this->a_visits_required = isset($data['a_visits_required']) ? new ClassViewGetResponseSessionResultVisitsRequired((array)$data['a_visits_required']) : null;
    }
}
