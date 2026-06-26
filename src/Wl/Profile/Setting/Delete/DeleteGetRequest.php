<?php

namespace WlSdk\Wl\Profile\Setting\Delete;

class DeleteGetRequest
{
    /**
     * List of business keys.
     *
     * @var string[]|null
     */
    public ?array $a_business = null;

    /**
     * List of user keys.
     *
     * @var string[]|null
     */
    public ?array $a_uid = null;

    /**
     * `true` if client delete from backend, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * The application ID.
     *
     * If set, it means that it is necessary to revoke the tokens of the connected social networks.
     * Currently, only Apple Sign-in supports token revocation.
     *
     * @var string|null
     */
    public ?string $text_application = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_business' => $this->a_business,
            'a_uid' => $this->a_uid,
            'is_backend' => $this->is_backend,
            'text_application' => $this->text_application,
            ],
            static fn ($v) => $v !== null
        );
    }
}
