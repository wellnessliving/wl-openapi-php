<?php

namespace WlSdk\Core\Server\ApcClear;

class ApcClearPostRequest
{
    /**
     * A list of keys to delete from APC cache at all servers in the cluster.
     *
     * Note that values stored here are raw keys, i.e. they are copies of results of CmsCache::key(),
     * arguments of apcu_delete().
     *
     * @var string[]|null
     */
    public ?array $a_key = null;

    /**
     * Type of the cache served by this API:
     *
     * * `apc` to delete from APC cache;
     * * `yac` to delete from YAC cache.
     *
     * Copy of argument of CoreCache::create().
     *
     * @var string|null
     */
    public ?string $s_cache = null;

    /**
     * Signature to ensure that the request originates from {@link \WlSdk\Core\Async\CoreAsyncDetachedAbstract}.
     *
     * @var string|null
     */
    public ?string $s_hash = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_key' => $this->a_key,
            's_cache' => $this->s_cache,
            's_hash' => $this->s_hash,
            ],
            static fn ($v) => $v !== null
        );
    }
}
