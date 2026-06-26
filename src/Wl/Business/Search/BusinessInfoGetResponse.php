<?php

namespace WlSdk\Wl\Business\Search;

/**
 * Response from GET
 */
class BusinessInfoGetResponse
{
    /**
     * Array with needed info about the business.
     * Values have the next structure:
     *
     * @var BusinessInfoGetResponseResult[]|null
     */
    public ?array $a_result = null;

    public function __construct(array $data)
    {
        $this->a_result = isset($data['a_result']) ? array_map(static fn ($item) => new BusinessInfoGetResponseResult((array)$item), (array)$data['a_result']) : null;
    }
}
