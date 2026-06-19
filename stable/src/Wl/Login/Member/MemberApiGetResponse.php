<?php
namespace WlSdk\Wl\Login\Member;

/**
 * Response from GET
 */
class MemberApiGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_business = null;

    public function __construct(array $data)
    {
        $this->a_business = isset($data['a_business']) ? (array)$data['a_business'] : null;
    }
}
