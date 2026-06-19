<?php
namespace WlSdk\Wl\Business;

/**
 * Response from GET
 */
class BusinessAccessApiGetResponse
{
    /**
     * The businesses the staff member belongs to.
     * Note that this field is here for backwards compatibility.
     *
     * @var string[]|null
     */
    public ?array $a_business = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_business_data = null;

    /**
     * The staff member key, determined by their email. This will be empty if the UID isn't empty.
     *
     * @var string|null
     */
    public ?string $uid_mail = null;

    public function __construct(array $data)
    {
        $this->a_business = isset($data['a_business']) ? (array)$data['a_business'] : null;
        $this->a_business_data = isset($data['a_business_data']) ? (array)$data['a_business_data'] : null;
        $this->uid_mail = isset($data['uid_mail']) ? (string)$data['uid_mail'] : null;
    }
}
