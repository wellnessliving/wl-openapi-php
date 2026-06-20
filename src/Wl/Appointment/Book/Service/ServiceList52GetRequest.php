<?php
namespace WlSdk\Wl\Appointment\Book\Service;

class ServiceList52GetRequest
{
    /**
     * The class tab key to use to filter services. If empty, this can be found on the standard book tab.
     * 
     * If multiple tabs are sent, appointment types, which are in at least in one of the tabs, will be in the
     * result.
     *
     * @var string[]|null
     */
    public ?array $a_class_tab = null;

    /**
     * List of staff members to filter a result.
     * 
     * Empty if the filtering is not necessary.
     *
     * @var string[]|null
     */
    public ?array $a_staff = null;

    /**
     * List of user keys to book appointments.
     * There may be empty values in this list, which means that this is a walk-in.
     *
     * @var string[]|null
     */
    public ?array $a_uid = null;

    /**
     * Image height in pixels. Please specify this value if you need image to be returned in specific size.
     * In case this value is not specified returned image will have default thumbnail size.
     *
     * @var int|null
     */
    public ?int $i_height = null;

    /**
     * Image width in pixels. Please specify this value if you need image to be returned in specific size.
     * In case this value is not specified returned image will have default thumbnail size.
     *
     * @var int|null
     */
    public ?int $i_width = null;

    /**
     * `true` - return all active services for a certain location ignoring user age and other restrictions.
     * `false` - return only services that are allowed for the user.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * `true` - search in all tabs.
     * `false` - search only on the selected book now tab.
     *
     * @var bool|null
     */
    public ?bool $is_tab_all = null;

    /**
     * If `true`, the client is a walk-in. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_walk_in = null;

    /**
     * Location to show available appointment booking schedule.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The key of a service category to show information for.
     *
     * @var string|null
     */
    public ?string $k_service_category = null;

    /**
     * The user key.
     * 
     * This field is used if the client books for himself or for the relative.
     * 
     * This field is incorrect to use for guest booking since in this case the client will be checked as a
     * relative.
     * 
     * In case of a group booking or a guest booking, the key of the client who is making the booking is set here.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_class_tab' => $this->a_class_tab,
            'a_staff' => $this->a_staff,
            'a_uid' => $this->a_uid,
            'i_height' => $this->i_height,
            'i_width' => $this->i_width,
            'is_backend' => $this->is_backend,
            'is_tab_all' => $this->is_tab_all,
            'is_walk_in' => $this->is_walk_in,
            'k_location' => $this->k_location,
            'k_service_category' => $this->k_service_category,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
