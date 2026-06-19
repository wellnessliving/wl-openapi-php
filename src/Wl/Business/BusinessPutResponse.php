<?php
namespace WlSdk\Wl\Business;

/**
 * Response from PUT
 */
class BusinessPutResponse
{
    /**
     * The key of the business.
     * 
     * When using `post()` returned key of the created business.
     * When using `put()` used for update business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the location for update or after creating.
     * `null` if location is not created.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The UID of the created staff member or `null` if no staff member should be created.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Url for password change page.
     * 
     * Filled only when creating staff member, otherwise `null`.
     *
     * @var string|null
     */
    public ?string $url_password_change = null;

    public function __construct(array $data)
    {
        $this->k_business = isset($data['k_business']) ? (string)$data['k_business'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
        $this->url_password_change = isset($data['url_password_change']) ? (string)$data['url_password_change'] : null;
    }
}
