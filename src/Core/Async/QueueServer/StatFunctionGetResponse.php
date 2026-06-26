<?php

namespace WlSdk\Core\Async\QueueServer;

/**
 * Response from GET
 */
class StatFunctionGetResponse
{
    /**
     * A list of functions.
     *
     * @var StatFunctionGetResponseFunction[]|null
     */
    public ?array $a_function = null;

    public function __construct(array $data)
    {
        $this->a_function = isset($data['a_function']) ? array_map(static fn ($item) => new StatFunctionGetResponseFunction((array)$item), (array)$data['a_function']) : null;
    }
}
