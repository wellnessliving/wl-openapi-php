<?php
namespace WlSdk\Wl\Appointment\Book\Asset;

class AssetListGetResponseAsset
{
    /**
     * Information about age restrictions for this event.
     * 
     * This will be an empty array if there aren't any age restrictions.
     *
     * @var AssetListGetResponseAssetAgeRestrictions|null
     */
    public ?AssetListGetResponseAssetAgeRestrictions $a_age_restrictions = null;

    /**
     * The key of service.
     *   Keys are service key.
     *   Values are class tab key.
     *
     * @var string[]|null
     */
    public ?array $a_class_tab = null;

    /**
     * A list of links to create a booking from a direct link (direct booking URL).
     * The system needs to know what tab is associated with the booking. Therefore, there needs to be one link
     * per tab.
     * Each element has two values:
     *
     * @var AssetListGetResponseAssetDirectLink|null
     */
    public ?AssetListGetResponseAssetDirectLink $a_direct_link = null;

    /**
     * Information about the asset logo:
     *
     * @var AssetListGetResponseAssetImage|null
     */
    public ?AssetListGetResponseAssetImage $a_image = null;

    /**
     * A list of asset periods with the following information:
     *
     * @var AssetListGetResponseAssetPeriod|null
     */
    public ?AssetListGetResponseAssetPeriod $a_period = null;

    /**
     * QUICK Search tag keys.
     *
     * @var string[]|null
     */
    public ?array $a_search_tag = null;

    /**
     * Determines whether the asset will be hidden in the White Label mobile apps.
     * If `true`, the asset won't be displayed. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $hide_application = null;

    /**
     * The resource age restriction
     *
     * @var string|null
     */
    public ?string $html_age_restriction = null;

    /**
     * The resource name.
     *
     * @var string|null
     */
    public ?string $html_title = null;

    /**
     * The purchase rule. One of the {@link \WlSdk\RsServiceRequireSid} constants.
     *
     * @var \WlSdk\RsServiceRequireSid|null
     */
    public ?\WlSdk\RsServiceRequireSid $id_service_require = null;

    /**
     * Determines whether this service can't be booked due to age restrictions.
     *
     * @var bool|null
     */
    public ?bool $is_age_restricted = null;

    /**
     * Quick book tab key.
     *
     * @var string|null
     */
    public ?string $k_class_tab = null;

    /**
     * The resource key.
     *
     * @var string|null
     */
    public ?string $k_resource = null;

    /**
     * The resource category key.
     *
     * @var string|null
     */
    public ?string $k_resource_category = null;

    public function __construct(array $data)
    {
        $this->a_age_restrictions = isset($data['a_age_restrictions']) ? new AssetListGetResponseAssetAgeRestrictions((array)$data['a_age_restrictions']) : null;
        $this->a_class_tab = isset($data['a_class_tab']) ? (array)$data['a_class_tab'] : null;
        $this->a_direct_link = isset($data['a_direct_link']) ? new AssetListGetResponseAssetDirectLink((array)$data['a_direct_link']) : null;
        $this->a_image = isset($data['a_image']) ? new AssetListGetResponseAssetImage((array)$data['a_image']) : null;
        $this->a_period = isset($data['a_period']) ? new AssetListGetResponseAssetPeriod((array)$data['a_period']) : null;
        $this->a_search_tag = isset($data['a_search_tag']) ? (array)$data['a_search_tag'] : null;
        $this->hide_application = isset($data['hide_application']) ? (bool)$data['hide_application'] : null;
        $this->html_age_restriction = isset($data['html_age_restriction']) ? (string)$data['html_age_restriction'] : null;
        $this->html_title = isset($data['html_title']) ? (string)$data['html_title'] : null;
        $this->id_service_require = isset($data['id_service_require']) ? \WlSdk\RsServiceRequireSid::tryFrom((int)$data['id_service_require']) : null;
        $this->is_age_restricted = isset($data['is_age_restricted']) ? (bool)$data['is_age_restricted'] : null;
        $this->k_class_tab = isset($data['k_class_tab']) ? (string)$data['k_class_tab'] : null;
        $this->k_resource = isset($data['k_resource']) ? (string)$data['k_resource'] : null;
        $this->k_resource_category = isset($data['k_resource_category']) ? (string)$data['k_resource_category'] : null;
    }
}
