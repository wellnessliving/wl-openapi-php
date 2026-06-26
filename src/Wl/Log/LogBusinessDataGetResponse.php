<?php

namespace WlSdk\Wl\Log;

/**
 * Response from GET
 */
class LogBusinessDataGetResponse
{
    /**
     * No description.
     *
     * @var LogBusinessDataGetResponseTemplate[]|null
     */
    public ?array $a_template = null;

    public function __construct(array $data)
    {
        $this->a_template = isset($data['a_template']) ? array_map(static fn ($item) => new LogBusinessDataGetResponseTemplate((array)$item), (array)$data['a_template']) : null;
    }
}
