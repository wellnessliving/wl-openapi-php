<?php

namespace WlSdk\Wl\Login\Code;

class CodePostRequest
{
    /**
     * Key of source mode. One of {@link \WlSdk\Wl\Mode\ModeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Mode\ModeSid
     */
    public ?int $id_mode = null;

    /**
     * Key of current business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Login code.
     *
     * @var string|null
     */
    public ?string $s_code = null;

    /**
     * Key of a user.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_mode' => $this->id_mode,
            'k_business' => $this->k_business,
            's_code' => $this->s_code,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
