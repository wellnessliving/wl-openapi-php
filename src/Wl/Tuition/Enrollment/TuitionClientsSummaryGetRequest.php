<?php

namespace WlSdk\Wl\Tuition\Enrollment;

class TuitionClientsSummaryGetRequest
{
    /**
     * Keys of the tuitions in the tuition microservice to get summary for.
     *
     * @var string[]|null
     */
    public ?array $a_tuition_id = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_tuition_id' => $this->a_tuition_id,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
