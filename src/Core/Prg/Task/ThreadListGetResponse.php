<?php

namespace WlSdk\Core\Prg\Task;

/**
 * Response from GET
 */
class ThreadListGetResponse
{
    /**
     * List of servers. One element contains:
     *
     * @var ThreadListGetResponseServer[]|null
     */
    public ?array $a_server = null;

    /**
     * List of errors on servers.
     * The key is the private IP address and the value is the error message.
     *
     * @var array|null
     */
    public ?array $a_server_error = null;

    /**
     * List of threads. One element contains:
     *
     * @var ThreadListGetResponseThread[]|null
     */
    public ?array $a_thread = null;

    public function __construct(array $data)
    {
        $this->a_server = isset($data['a_server']) ? array_map(static fn ($item) => new ThreadListGetResponseServer((array)$item), (array)$data['a_server']) : null;
        $this->a_server_error = isset($data['a_server_error']) ? (array)$data['a_server_error'] : null;
        $this->a_thread = isset($data['a_thread']) ? array_map(static fn ($item) => new ThreadListGetResponseThread((array)$item), (array)$data['a_thread']) : null;
    }
}
