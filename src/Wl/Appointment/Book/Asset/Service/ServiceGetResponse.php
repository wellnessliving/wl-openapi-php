<?php
namespace WlSdk\Wl\Appointment\Book\Asset\Service;

/**
 * Response from GET
 */
class ServiceGetResponse
{
    /**
     * A list of reserved assets.
     * 
     * 1st level keys refer to asset keys.
     * 2nd level keys refer to asset numbers.
     * Values refer to keys of appointment bookings that reserve the asset(s).
     * 
     * For example, if you want to check if the 10th asset with the key of '15' is reserved,
     * you can check if `a_resource_busy[&#039;15&#039;][&#039;10&#039;]` is free.
     * 
     * If you're rebooking an appointment, check the value of `a_resource_busy[&#039;15&#039;][&#039;10&#039;]`.
     * If it's equal to the key of your current appointment booking, you can assume the asset is available.
     *
     * @var string[][]|null
     */
    public ?array $a_resource_busy = null;

    /**
     * No description.
     *
     * @var ServiceGetResponseResourceType[]|null
     */
    public ?array $a_resource_type = null;

    /**
     * Can the staff members book reserved assets.
     *
     * @var bool|null
     */
    public ?bool $can_book_unavailable_assets = null;

    public function __construct(array $data)
    {
        $this->a_resource_busy = isset($data['a_resource_busy']) ? (array)$data['a_resource_busy'] : null;
        $this->a_resource_type = isset($data['a_resource_type']) ? array_map(static fn($item) => new ServiceGetResponseResourceType((array)$item), (array)$data['a_resource_type']) : null;
        $this->can_book_unavailable_assets = isset($data['can_book_unavailable_assets']) ? (bool)$data['can_book_unavailable_assets'] : null;
    }
}
