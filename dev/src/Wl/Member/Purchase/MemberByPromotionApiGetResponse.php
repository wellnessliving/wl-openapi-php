<?php
namespace WlSdk\Wl\Member\Purchase;

/**
 * Response from GET
 */
class MemberByPromotionApiGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_clients = null;

    public function __construct(array $data)
    {
        $this->a_clients = isset($data['a_clients']) ? (array)$data['a_clients'] : null;
    }
}
