<?php

namespace WlSdk\Wl\Promotion\Convert;

/**
 * Response from GET
 */
class ConvertGetResponse
{
    /**
     * Promotion data containing the following structure:
     *
     * @var ConvertGetResponsePromotion[]|null
     */
    public ?array $a_promotion = null;

    public function __construct(array $data)
    {
        $this->a_promotion = isset($data['a_promotion']) ? array_map(static fn ($item) => new ConvertGetResponsePromotion((array)$item), (array)$data['a_promotion']) : null;
    }
}
