<?php
namespace WlSdk\Wl\Member\Purchase;

/**
 * Response from GET
 */
class MemberByPromotionGetResponse
{
    /**
     * No description.
     *
     * @var MemberByPromotionGetResponseClients[]|null
     */
    public ?array $a_clients = null;

    public function __construct(array $data)
    {
        $this->a_clients = isset($data['a_clients']) ? array_map(static fn($item) => new MemberByPromotionGetResponseClients((array)$item), (array)$data['a_clients']) : null;
    }
}
