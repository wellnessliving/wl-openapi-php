<?php

namespace WlSdk\Wl\Zoom\Recover;

class ZoomRecoverGetRequest
{
    /**
     * Date by which the list of meetings must be returned.
     *
     * @var string|null
     */
    public ?string $dl_meeting = null;

    /**
     * Key of the business for which meeting was created.
     *
     * @var string|null
     */
    public ?string $k_business_use = null;

    public function params(): array
    {
        return array_filter(
            [
            'dl_meeting' => $this->dl_meeting,
            'k_business_use' => $this->k_business_use,
            ],
            static fn ($v) => $v !== null
        );
    }
}
