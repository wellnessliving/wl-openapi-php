<?php
namespace WlSdk\Wl\Promotion\Index;

/**
 * Response from GET
 */
class PromotionIndexGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_promotion = null;

    public function __construct(array $data)
    {
        $this->a_promotion = isset($data['a_promotion']) ? (array)$data['a_promotion'] : null;
    }
}
