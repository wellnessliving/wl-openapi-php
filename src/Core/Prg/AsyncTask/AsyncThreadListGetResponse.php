<?php

namespace WlSdk\Core\Prg\AsyncTask;

/**
 * Response from GET
 */
class AsyncThreadListGetResponse
{
    /**
     * List of task representations displayed to customers.
     *
     * Each element contains rendered information about an individual task.
     *
     * The structure of each array element is:
     *
     * @var AsyncThreadListGetResponseInfo[]|null
     */
    public ?array $a_info = null;

    public function __construct(array $data)
    {
        $this->a_info = isset($data['a_info']) ? array_map(static fn ($item) => new AsyncThreadListGetResponseInfo((array)$item), (array)$data['a_info']) : null;
    }
}
