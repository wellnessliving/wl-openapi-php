<?php
namespace WlSdk\Wl\Profile\Alert;

class AlertEditGetRequest
{
    /**
     * Key of current business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Login note key to edit or get info for.
     * Empty if new entry is being added.
     *
     * @var string|null
     */
    public ?string $k_login_note = null;

    /**
     * Key of a user to show information or post a note for.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_login_note' => $this->k_login_note,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
