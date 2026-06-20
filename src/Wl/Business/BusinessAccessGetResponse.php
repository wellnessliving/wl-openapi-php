<?php
namespace WlSdk\Wl\Business;

/**
 * Response from GET
 */
class BusinessAccessGetResponse
{
    /**
     * The businesses the staff member belongs to.
     * Note that this field is here for backwards compatibility.
     *
     * @var string[]|null
     */
    public ?array $a_business = null;

    /**
     * The list of accessible businesses with their corresponding data. Each value is an array with the next
     * structure:
     *
     * @var BusinessAccessGetResponseBusinessData[]|null
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
        $this->a_business_data = isset($data['a_business_data']) ? array_map(static fn($item) => new BusinessAccessGetResponseBusinessData((array)$item), (array)$data['a_business_data']) : null;
        $this->uid_mail = isset($data['uid_mail']) ? (string)$data['uid_mail'] : null;
    }
}
