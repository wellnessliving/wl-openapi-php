<?php
namespace WlSdk\Wl\Tax;

/**
 * Response from GET
 */
class TaxListGetResponse
{
    /**
     * A list of taxes.
     * 
     * Each element has the following structure:
     *
     * @var TaxListGetResponseList[]|null
     */
    public ?array $a_list = null;

    public function __construct(array $data)
    {
        $this->a_list = isset($data['a_list']) ? array_map(static fn($item) => new TaxListGetResponseList((array)$item), (array)$data['a_list']) : null;
    }
}
