<?php

namespace WlSdk\Wl\Lead\Stage;

class LeadStageManagerGetRequest
{
    /**
     * Key of the Enterprise Headquarters business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
