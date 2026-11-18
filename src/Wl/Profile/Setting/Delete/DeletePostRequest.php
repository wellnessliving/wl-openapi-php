<?php

namespace WlSdk\Wl\Profile\Setting\Delete;

class DeletePostRequest
{
    /**
     * The keys of the businesses to delete the account from.
     *
     * Send one business key to delete the account from that business only. Send all the businesses of the client,
     * except the franchisor businesses, to delete the account everywhere. A franchisor business is rejected here;
     * it is
     * removed automatically when the account is deleted from all the other businesses.
     *
     * @var string[]|null
     */
    public ?array $a_business = null;

    /**
     * The keys of the users to delete.
     *
     * When empty, the signed-in user is used. Keys other than the signed-in user are accepted only when
     * {@link \WlSdk\Wl\Profile\Setting\Delete\Delete} is `true`.
     *
     * @var string[]|null
     */
    public ?array $a_uid = null;

    /**
     * `true` when a staff member deletes clients, `false` when the client deletes their own account.
     *
     * When `true`, the signed-in staff member must have the privilege to delete client profiles in every business
     * of
     * {@link \WlSdk\Wl\Profile\Setting\Delete\Delete}.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * The application ID.
     *
     * When set, the Apple Sign-in tokens of the user are revoked when the account is deleted from all the
     * businesses.
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
