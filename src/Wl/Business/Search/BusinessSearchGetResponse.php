<?php

namespace WlSdk\Wl\Business\Search;

/**
 * Response from GET
 */
class BusinessSearchGetResponse
{
    /**
     * Array with business keys that contain given name in their title.
     *
     * @var string[]|null
     */
    public ?array $a_result = null;

    public function __construct(array $data)
    {
        $this->a_result = isset($data['a_result']) ? (array)$data['a_result'] : null;
    }
}
