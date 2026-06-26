<?php

namespace WlSdk\Core\Async\QueueServer;

class StatWorkerGetResponseWorker
{
    /**
     * A list of functions that this worker listens to.
     *
     * @var string[]|null
     */
    public ?array $a_function = null;

    /**
     * Datacenter region ID to which the worker belongs.
     *   Example: If the full name is `prod#monolith#2/10.2.164.70/3`, the region is `2`.
     *   `0` if there is no division into regions.
     *
     * @var int|null
     */
    public ?int $id_region = null;

    /**
     * IP address of the queue server that has provided information about this worker.
     *
     * @var string|null
     */
    public ?string $ip_queue = null;

    /**
     * IP address of the worker server.
     *
     * @var string|null
     */
    public ?string $ip_worker = null;

    /**
     * ID of the worker. This ID uniquely identifies a running thread within specified queue server.
     *   Example: `prod#monolith#2/10.2.164.70/3`.
     *
     * @var string|null
     */
    public ?string $s_id = null;

    /**
     * ID of the worker without an scope.
     *   Example: If the full name is `prod#monolith#2/10.2.164.70/3`, the short name is `10.2.164.70/3`.
     *   Empty string if the full name does not contain a scope.
     *
     * @var string|null
     */
    public ?string $s_id_short = null;

    /**
     * Microservice to which worker belongs, one of MicroserviceList constant.
     *   Example: If the full name is `prod#monolith#2/10.2.164.70/3`, the microservice is `monolith`.
     *   Empty string if the full name does not contain a microservice.
     *
     * @var string|null
     */
    public ?string $s_microservice = null;

    /**
     * Async task scope. See the documentation for details in the method AsyncProviderConfig::scopeGet().
     *   Example: If the full name is `prod#monolith#2/10.2.164.70/3`, the scope is `prod#monolith#2/`.
     *   Empty string if the full name does not contain a scope.
     *
     * @var string|null
     */
    public ?string $s_scope = null;

    /**
     * World to which worker belongs.
     *   Example: If the full name is `prod#monolith#2/10.2.164.70/3`, the world is `prod`.
     *   Empty string if the full name does not contain a world.
     *
     * @var string|null
     */
    public ?string $s_world = null;

    public function __construct(array $data)
    {
        $this->a_function = isset($data['a_function']) ? (array)$data['a_function'] : null;
        $this->id_region = isset($data['id_region']) ? (int)$data['id_region'] : null;
        $this->ip_queue = isset($data['ip_queue']) ? (string)$data['ip_queue'] : null;
        $this->ip_worker = isset($data['ip_worker']) ? (string)$data['ip_worker'] : null;
        $this->s_id = isset($data['s_id']) ? (string)$data['s_id'] : null;
        $this->s_id_short = isset($data['s_id_short']) ? (string)$data['s_id_short'] : null;
        $this->s_microservice = isset($data['s_microservice']) ? (string)$data['s_microservice'] : null;
        $this->s_scope = isset($data['s_scope']) ? (string)$data['s_scope'] : null;
        $this->s_world = isset($data['s_world']) ? (string)$data['s_world'] : null;
    }
}
