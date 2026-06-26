<?php

namespace WlSdk\Core\Async\Service;

class ActivatePostRequest
{
    /**
     * Name of a provider which worker server should be activated or deactivated.
     *
     * @var string|null
     */
    public ?string $s_provider = null;

    /**
     * Datacenter region ID to which the worker server belongs. One of the {@link
     * \WlSdk\Core\Amazon\Region\AmazonRegionSid} constants.
     *
     * `null` if there is no division into regions or current region.
     *
     * @var int|null
     * @see \WlSdk\Core\Amazon\Region\AmazonRegionSid
     */
    public ?int $id_region = null;

    /**
     * IP address of a worker server that should be activated or deactivated.
     *
     * @var string|null
     */
    public ?string $ip_worker = null;

    /**
     * Whether this worker server should be activated or deactivated.
     *
     * `true` to activate this worker server.
     *
     * `false` to deactivate this worker server.
     *
     * @var string|null
     */
    public ?string $is_active = null;

    /**
     * Microservice to which worker server belongs, one of MicroserviceList constant.
     *
     * `null` if current microservice.
     *
     * @var string|null
     */
    public ?string $s_microservice = null;

    /**
     * World to which worker server belongs.
     * See for details: WorldList::currentWorld().
     *
     * `null` if current world.
     *
     * @var string|null
     */
    public ?string $s_world = null;

    public function params(): array
    {
        return array_filter(
            [
            's_provider' => $this->s_provider,
            'id_region' => $this->id_region,
            'ip_worker' => $this->ip_worker,
            'is_active' => $this->is_active,
            's_microservice' => $this->s_microservice,
            's_world' => $this->s_world,
            ],
            static fn ($v) => $v !== null
        );
    }
}
