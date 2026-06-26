<?php

namespace WlSdk\Wl\Business\Header;

/**
 * Response from GET
 */
class OwnerGetResponse
{
    /**
     * Business or Location title.
     * Which of the title will be returned depends on the current user and the features of the business.
     *
     * @var string|null
     */
    public ?string $html_title = null;

    /**
     * Whether the business or location logo exists and should be displayed.
     *
     * @var bool|null
     */
    public ?bool $is_logo_exists = null;

    /**
     * The key of the business for which you want to get header information.
     *
     * As a result, this field may be empty. In this case, the location key will be setted.
     *
     * Primary key from RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of current user location.
     *
     * Primary key from RsLocationSql table.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Whether title will be displayed or not.
     * Depends on business settings.
     *
     * @var bool|null
     */
    public ?bool $show_business_name = null;

    /**
     * Microsite URL for user location.
     *
     * @var string|null
     */
    public ?string $url_microsite = null;

    public function __construct(array $data)
    {
        $this->html_title = isset($data['html_title']) ? (string)$data['html_title'] : null;
        $this->is_logo_exists = isset($data['is_logo_exists']) ? (bool)$data['is_logo_exists'] : null;
        $this->k_business = isset($data['k_business']) ? (string)$data['k_business'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->show_business_name = isset($data['show_business_name']) ? (bool)$data['show_business_name'] : null;
        $this->url_microsite = isset($data['url_microsite']) ? (string)$data['url_microsite'] : null;
    }
}
