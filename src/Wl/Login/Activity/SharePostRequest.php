<?php

namespace WlSdk\Wl\Login\Activity;

class SharePostRequest
{
    /**
     * List of IDs of user's activity. Primary keys in RsLoginActivitySql table.
     *
     * @var string[]|null
     */
    public ?array $a_login_activity = null;

    /**
     * `true` - share activity on Facebook; `false` - do not share on Facebook.
     *
     * @var bool|null
     */
    public ?bool $is_facebook = null;

    /**
     * `true` - share activity on Twitter; `false` - do not share on Twitter.
     *
     * @var bool|null
     */
    public ?bool $is_twitter = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_login_activity' => $this->a_login_activity,
            'is_facebook' => $this->is_facebook,
            'is_twitter' => $this->is_twitter,
            ],
            static fn ($v) => $v !== null
        );
    }
}
