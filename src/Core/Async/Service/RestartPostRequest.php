<?php

namespace WlSdk\Core\Async\Service;

class RestartPostRequest
{
    /**
     * Name of a provider which thread(s) should be restarted.
     *
     * @var string|null
     */
    public ?string $s_provider = null;

    /**
     * Datacenter region ID to which the worker belongs. One of the {@link
     * \WlSdk\Core\Amazon\Region\AmazonRegionSid} constants.
     * `null` if there is no division into regions.
     *
     * @var int|null
     * @see \WlSdk\Core\Amazon\Region\AmazonRegionSid
     */
    public ?int $id_region = null;

    /**
     * IP address of a queue server which worker threads should be restarted.
     *
     * An empty string to restart worker threads at all queue servers.
     *
     * @var string|null
     */
    public ?string $ip_queue = null;

    /**
     * IP address of a worker at which all threads should be restarted.
     *
     * This variable is required if `is_all` is `false` and
     * `s_thread` is not specified, otherwise this variable is not allowed.
     *
     * @var string|null
     */
    public ?string $ip_worker = null;

    /**
     * Whether all threads at all worker servers should be restarted.
     *
     * This variable should be set to `true` if neither `ip_worker` nor
     * `s_thread` specified, otherwise this variable should be set to `false`.
     *
     * @var bool|null
     */
    public ?bool $is_all = null;

    /**
     * Microservice to which worker belongs, one of MicroserviceList constant.
     *
     * `null` if value is not defined.
     *
     * @var string|null
     */
    public ?string $s_microservice = null;

    /**
     * ID of a thread to restart.
     *
     * This variable is required if `is_all` is `false` and
     * `ip_worker` is not specified, otherwise this variable is not allowed.
     *
     * @var string|null
     */
    public ?string $s_thread = null;

    /**
     * World to which worker belongs.
     * See for details: WorldList::currentWorld().
     *
     * `null` if search should be performed in all worlds.
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
            'ip_queue' => $this->ip_queue,
            'ip_worker' => $this->ip_worker,
            'is_all' => $this->is_all,
            's_microservice' => $this->s_microservice,
            's_thread' => $this->s_thread,
            's_world' => $this->s_world,
            ],
            static fn ($v) => $v !== null
        );
    }
}
