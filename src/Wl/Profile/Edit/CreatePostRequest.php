<?php
namespace WlSdk\Wl\Profile\Edit;

class CreatePostRequest
{
    /**
     * The key of the business where you're creating new user.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * First name of the user.
     *
     * @var string|null
     */
    public ?string $text_firstname = null;

    /**
     * Last name of the user.
     *
     * @var string|null
     */
    public ?string $text_lastname = null;

    /**
     * Email of the user.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'text_firstname' => $this->text_firstname,
            'text_lastname' => $this->text_lastname,
            'text_mail' => $this->text_mail,
            ],
            static fn($v) => $v !== null
        );
    }
}
