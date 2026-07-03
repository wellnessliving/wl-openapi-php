<?php

namespace WlSdk\Wl\Staff\StaffView;

class StaffView74GetRequest
{
    /**
     * A list of staff user IDs.
     *
     * @var string[]|null
     */
    public ?array $a_uid_staff_list = null;

    /**
     * Image height in pixels. Please specify this value if you need image to be returned in specific size.
     * In case this value is not specified returned image will have default thumbnail size.
     *
     * @var int|null
     */
    public ?int $i_image_height = null;

    /**
     * Image width in pixels. Please specify this value if you need image to be returned in specific size.
     * In case this value is not specified returned image will have default thumbnail size.
     *
     * @var int|null
     */
    public ?int $i_image_width = null;

    /**
     * The key of the business to show information for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The staff member user ID.
     * A staff member can work for more than one business.
     * This key can be found using the {@link \WlSdk\Wl\Staff\StaffList\StaffList} endpoint.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_uid_staff_list' => $this->a_uid_staff_list,
            'i_image_height' => $this->i_image_height,
            'i_image_width' => $this->i_image_width,
            'k_business' => $this->k_business,
            'uid_staff' => $this->uid_staff,
            ],
            static fn ($v) => $v !== null
        );
    }
}
