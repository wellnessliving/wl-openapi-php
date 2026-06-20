<?php

namespace WlSdk\Wl\Appointment\Book\Asset;

class AssetListGetRequest
{
    /**
     * The selected date and time of the asset booking. It is used in cases when the business booking policy allows
     * clients to select a date and time, and then the available asset.
     *
     * @var string|null
     */
    public ?string $dtl_date = null;

    /**
     * Image height in pixels. Please specify this value if you need image to be returned in specific size.
     * In case this value is not specified returned image will have default size.
     *
     * @var int|null
     */
    public ?int $i_image_height = null;

    /**
     * Image width in pixels. Please specify this value if you need image to be returned in specific size.
     * In case this value is not specified returned image will have default size.
     *
     * @var int|null
     */
    public ?int $i_image_width = null;

    /**
     * Mode type, one of {@link \WlSdk\Wl\Mode\ModeSid} constants.
     *
     * @var int|null
     */
    public ?int $id_mode = null;

    /**
     * This is `true` if asset categories are loaded for back-end mode. Otherwise, this will be `false` for
     * front-end mode.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * `true` - search in all tabs.
     * `false` - search only for the selected book tab.
     *
     * @var bool|null
     */
    public ?bool $is_tab_all = null;

    /**
     * Key of the appointment, if we reschedule existing appointment.
     * It should be sent to ignore it when we get availability hours for the asset.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    /**
     * Business key.
     *
     * If not set, location's business will be used.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The class tab key used to filter assets.
     *
     * This will be `null` if not set yet or if elements with no specified class tab are selected.
     *
     * @var string|null
     */
    public ?string $k_class_tab = null;

    /**
     * The location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The asset category key to show information for.
     *
     * @var string|null
     */
    public ?string $k_resource_category = null;

    /**
     * Timezone of date and time of asset booking.
     *
     * Empty if `dtl_date` not set or client can't change in which timezone dates should be shown.
     *
     * @var string|null
     */
    public ?string $k_timezone = null;

    /**
     * Client to get information for.
     *
     * If client not set, returns full asset list without client restrictions.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'dtl_date' => $this->dtl_date,
            'i_image_height' => $this->i_image_height,
            'i_image_width' => $this->i_image_width,
            'id_mode' => $this->id_mode,
            'is_backend' => $this->is_backend,
            'is_tab_all' => $this->is_tab_all,
            'k_appointment' => $this->k_appointment,
            'k_business' => $this->k_business,
            'k_class_tab' => $this->k_class_tab,
            'k_location' => $this->k_location,
            'k_resource_category' => $this->k_resource_category,
            'k_timezone' => $this->k_timezone,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
