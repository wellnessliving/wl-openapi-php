<?php

namespace WlSdk\Core\Search\Autoscaling;

class AutoscalingSuspendPostRequest
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

    /**
     * Comment of suspension of autoscaling activities.
     *
     * @var string|null
     */
    public ?string $s_where = null;

    public function params(): array
    {
        return array_filter(
            [
            'cid_table' => $this->cid_table,
            's_provider' => $this->s_provider,
            's_where' => $this->s_where,
            ],
            static fn ($v) => $v !== null
        );
    }
}
