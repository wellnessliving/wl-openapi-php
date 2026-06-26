<?php

namespace WlSdk\Thoth\LayoutBe\UserProfile\Popup;

/**
 * Response from GET
 */
class UserPopupGetResponse
{
    /**
     * List of businesses for switching. One element contains:
     *
     * @var UserPopupGetResponseBusiness[]|null
     */
    public ?array $a_business = null;

    /**
     * List of locations for switching. One element contains:
     *
     * @var UserPopupGetResponseLocation[]|null
     */
    public ?array $a_location = null;

    /**
     * List of related profiles. One element contains:
     *
     * @var UserPopupGetResponseUser[]|null
     */
    public ?array $a_user = null;

    /**
     * Whether this is a backend context.
     * `true` if backend, `false` if frontend.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * Flag indicating general mode without a selected business.
     *
     * @var bool|null
     */
    public ?bool $is_general = null;

    /**
     * Flag indicating that the current user has staff access.
     *
     * @var bool|null
     */
    public ?bool $is_staff = null;

    /**
     * Current frontend business key. Primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Show business/location switching selects.
     *
     * @var bool|null
     */
    public ?bool $show_select = null;

    /**
     * Current user ID.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Logout link.
     *
     * @var string|null
     */
    public ?string $url_logout = null;

    /**
     * Link to the profile page.
     *
     * @var string|null
     */
    public ?string $url_profile = null;

    /**
     * Link to schedule (backend access).
     *
     * @var string|null
     */
    public ?string $url_schedule = null;

    /**
     * Link to staff profile in backend popup.
     *
     * @var string|null
     */
    public ?string $url_staff = null;

    public function __construct(array $data)
    {
        $this->a_business = isset($data['a_business']) ? array_map(static fn ($item) => new UserPopupGetResponseBusiness((array)$item), (array)$data['a_business']) : null;
        $this->a_location = isset($data['a_location']) ? array_map(static fn ($item) => new UserPopupGetResponseLocation((array)$item), (array)$data['a_location']) : null;
        $this->a_user = isset($data['a_user']) ? array_map(static fn ($item) => new UserPopupGetResponseUser((array)$item), (array)$data['a_user']) : null;
        $this->is_backend = isset($data['is_backend']) ? (bool)$data['is_backend'] : null;
        $this->is_general = isset($data['is_general']) ? (bool)$data['is_general'] : null;
        $this->is_staff = isset($data['is_staff']) ? (bool)$data['is_staff'] : null;
        $this->k_business = isset($data['k_business']) ? (string)$data['k_business'] : null;
        $this->show_select = isset($data['show_select']) ? (bool)$data['show_select'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
        $this->url_logout = isset($data['url_logout']) ? (string)$data['url_logout'] : null;
        $this->url_profile = isset($data['url_profile']) ? (string)$data['url_profile'] : null;
        $this->url_schedule = isset($data['url_schedule']) ? (string)$data['url_schedule'] : null;
        $this->url_staff = isset($data['url_staff']) ? (string)$data['url_staff'] : null;
    }
}
