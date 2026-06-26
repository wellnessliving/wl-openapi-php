<?php

namespace WlSdk\Core\Search\Autoscaling;

class AutoscalingSuspendDeleteRequest
{
    /**
     * CID of the search table class, one of {@link \WlSdk\Core\Amazon\CloudSearch\CloudSearchTable} subclasses.
     *
     * @var int|null
     * @see \WlSdk\Core\Amazon\CloudSearch\CloudSearchTable
     */
    public ?int $cid_table = null;

    /**
     * Name of the search provider configuration. See `s_name`.
     *
     * @var string|null
     */
    public ?string $s_provider = null;

    public function params(): array
    {
        return array_filter(
            [
            'cid_table' => $this->cid_table,
            's_provider' => $this->s_provider,
            ],
            static fn ($v) => $v !== null
        );
    }
}
