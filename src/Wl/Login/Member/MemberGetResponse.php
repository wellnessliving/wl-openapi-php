<?php
namespace WlSdk\Wl\Login\Member;

/**
 * Response from GET
 */
class MemberGetResponse
{
    /**
     * A list of businesses where the client is present. Every element is an array with the following keys:
     *
     * @var MemberGetResponseBusiness[]|null
     */
    public ?array $a_business = null;

    public function __construct(array $data)
    {
        $this->a_business = isset($data['a_business']) ? array_map(static fn($item) => new MemberGetResponseBusiness((array)$item), (array)$data['a_business']) : null;
    }
}
