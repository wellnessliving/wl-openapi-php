<?php

namespace WlSdk\Core\Passport\Login\Register;

class RegisterPostRequest
{
    /**
     * The additional data about new users.
     *
     * @var array|null
     */
    public ?array $a_data = null;

    /**
     * ID of source mode.
     *
     * One of {@link \WlSdk\Wl\Mode\ModeSid} constants.
     * `null` if not initialized or the api is not called in the Wellnessliving project.
     *
     * @var int|null
     * @see \WlSdk\Wl\Mode\ModeSid
     */
    public ?int $id_mode = null;

    /**
     * The application ID. This is a business specific ID required to register clients.
     *
     * @var string|null
     */
    public ?string $s_application = null;

    /**
     * The new client email address.
     *
     * @var string|null
     */
    public ?string $s_mail = null;

    /**
     * The new client given name.
     *
     * @var string|null
     */
    public ?string $s_name_first = null;

    /**
     * The new client surname.
     *
     * @var string|null
     */
    public ?string $s_name_last = null;

    /**
     * The new client password.
     *
     * @var string|null
     */
    public ?string $s_password = null;

    /**
     * The URL to the confirmation page. This link is used in a confirmation email.
     *
     * If empty, URL to default page is used.
     *
     * @var string|null
     */
    public ?string $url_confirm = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_data' => $this->a_data,
            'id_mode' => $this->id_mode,
            's_application' => $this->s_application,
            's_mail' => $this->s_mail,
            's_name_first' => $this->s_name_first,
            's_name_last' => $this->s_name_last,
            's_password' => $this->s_password,
            'url_confirm' => $this->url_confirm,
            ],
            static fn ($v) => $v !== null
        );
    }
}
