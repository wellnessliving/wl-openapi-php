<?php

namespace WlSdk\Core\Async\QueueServer;

class StatFunctionGetResponseFunction
{
    /**
     * Number of tasks in the queue.
     *
     * @var int|null
     */
    public ?int $i_queue = null;

    /**
     * Number of tasks currently running.
     *
     * @var int|null
     */
    public ?int $i_run = null;

    /**
     * Number of workers that listen for this function.
     *
     * @var int|null
     */
    public ?int $i_worker = null;

    /**
     * IP address of the queue server that has provided information about this function.
     *
     * @var string|null
     */
    public ?string $ip_queue = null;

    /**
     * Class name of the function.
     *
     * @var string|null
     */
    public ?string $s_class = null;

    /**
     * Type of the async function. Possible values: `DETACHED` or `FOREGROUND`.
     *  `null` if type could not be determined.
     *
     * @var string|null
     */
    public ?string $s_class_type = null;

    /**
     * Fully qualified name of the function (as registered in Gearman).
     *  Example: `prod#monolith#2/127.1.1.0/1/643`.
     *
     * @var string|null
     */
    public ?string $s_function = null;

    /**
     * Name of the function without a scope.
     *  Example: If the full name is `prod#monolith#2/127.1.1.0/1/643`, the short name is `127.1.1.0/1/643`.
     *
     * @var string|null
     */
    public ?string $s_function_short = null;

    /**
     * Async function scope. See the documentation for details in the method AsyncProviderConfig::scopeGet().
     *  Example: If the full name is `prod#monolith#2/127.1.1.0/1/643`, the scope is `prod#monolith#2/`.
     *
     * @var string|null
     */
    public ?string $s_scope = null;

    public function __construct(array $data)
    {
        $this->i_queue = isset($data['i_queue']) ? (int)$data['i_queue'] : null;
        $this->i_run = isset($data['i_run']) ? (int)$data['i_run'] : null;
        $this->i_worker = isset($data['i_worker']) ? (int)$data['i_worker'] : null;
        $this->ip_queue = isset($data['ip_queue']) ? (string)$data['ip_queue'] : null;
        $this->s_class = isset($data['s_class']) ? (string)$data['s_class'] : null;
        $this->s_class_type = isset($data['s_class_type']) ? (string)$data['s_class_type'] : null;
        $this->s_function = isset($data['s_function']) ? (string)$data['s_function'] : null;
        $this->s_function_short = isset($data['s_function_short']) ? (string)$data['s_function_short'] : null;
        $this->s_scope = isset($data['s_scope']) ? (string)$data['s_scope'] : null;
    }
}
