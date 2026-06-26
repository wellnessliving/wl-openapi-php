<?php

namespace WlSdk\Core\Search\Autoscaling;

class AutoscalingSizePostRequest
{
    /**
     * CID of the search table class, one of {@link \WlSdk\Core\Amazon\CloudSearch\CloudSearchTable} subclasses.
     *
     * @var int|null
     * @see \WlSdk\Core\Amazon\CloudSearch\CloudSearchTable
     */
    public ?int $cid_table = null;

    /**
     * New number of instances.
     *
     * @var int|null
     */
    public ?int $i_want = null;

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
            'i_want' => $this->i_want,
            's_provider' => $this->s_provider,
            ],
            static fn ($v) => $v !== null
        );
    }
}
