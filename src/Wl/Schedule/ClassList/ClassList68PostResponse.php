<?php
namespace WlSdk\Wl\Schedule\ClassList;

/**
 * Response from POST
 */
class ClassList68PostResponse
{
    /**
     * Keys are dates of the days inside requested date range, when there is at least one class in the business.
     * If locations are sent as a parameter, then at least one class must exist in the given locations.
     * 
     * Each key is a date string in `YYYY-MM-DD` format (local date in the business time zone).
     * Each value is an empty array reserved for future use.
     *
     * @var string[]|null
     */
    public ?array $a_calendar = null;

    /**
     * Information about classes/events for quick filter.
     * 
     * Every element has the following keys:
     * 
     * 
     * For generating this filter, all filters are applied except:
     * - `a_class`;
     * - `a_event`;
     * - `show_class`;
     * - `show_event`.
     *
     * @var ClassList68PostResponseQuick|null
     */
    public ?ClassList68PostResponseQuick $a_quick = null;

    /**
     * A list of classes sessions starting with the date [ClassListApi](/Wl/Schedule/ClassList/ClassList.json)
     * and in the 62 days ahead (or up to [ClassListApi](/Wl/Schedule/ClassList/ClassList.json)).
     * Every element has the following keys:
     *
     * @var ClassList68PostResponseSession[]|null
     */
    public ?array $a_session = null;

    /**
     * If `true`, the list of sessions contains sessions from different time zones. Otherwise, this will be
     * `false`.
     *
     * @var bool|null
     */
    public ?bool $is_timezone_different = null;

    /**
     * If `true`, there exists at least one virtual service by a specified
     * `k_business` and `k_class_tab`,
     * Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_virtual_service = null;

    public function __construct(array $data)
    {
        $this->a_calendar = isset($data['a_calendar']) ? (array)$data['a_calendar'] : null;
        $this->a_quick = isset($data['a_quick']) ? new ClassList68PostResponseQuick((array)$data['a_quick']) : null;
        $this->a_session = isset($data['a_session']) ? array_map(static fn($item) => new ClassList68PostResponseSession((array)$item), (array)$data['a_session']) : null;
        $this->is_timezone_different = isset($data['is_timezone_different']) ? (bool)$data['is_timezone_different'] : null;
        $this->is_virtual_service = isset($data['is_virtual_service']) ? (bool)$data['is_virtual_service'] : null;
    }
}
