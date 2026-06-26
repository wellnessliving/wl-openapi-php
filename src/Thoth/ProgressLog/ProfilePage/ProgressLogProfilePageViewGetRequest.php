<?php

namespace WlSdk\Thoth\ProgressLog\ProfilePage;

class ProgressLogProfilePageViewGetRequest
{
    /**
     * Date to compare progress log with.
     * `null` to only display latest values without comparison.
     *
     * @var string|null
     */
    public ?string $dl_compare = null;

    /**
     * Key of the business, in which profile page is rendered.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the user who is viewing the profile page.
     *
     * @var string|null
     */
    public ?string $uid_actor = null;

    /**
     * Key of the user, whose progress log profile page to render.
     *
     * @var string|null
     */
    public ?string $uid_client = null;

    public function params(): array
    {
        return array_filter(
            [
            'dl_compare' => $this->dl_compare,
            'k_business' => $this->k_business,
            'uid_actor' => $this->uid_actor,
            'uid_client' => $this->uid_client,
            ],
            static fn ($v) => $v !== null
        );
    }
}
