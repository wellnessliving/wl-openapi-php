<?php

namespace WlSdk\Wl\Business;

/**
 * Response from GET
 */
class EnterFormGetResponse
{
    /**
     * `true` - enable for this application sign in with Apple; `false` - disable.
     *
     * @var bool|null
     */
    public ?bool $is_apple = null;

    /**
     * `true` - enable for this application sign in with Facebook; `false` - disable.
     *
     * @var bool|null
     */
    public ?bool $is_facebook = null;

    /**
     * `true` - enable for this application sign in with Facebook for Android; `false` - disable.
     *
     * @var bool|null
     */
    public ?bool $is_facebook_android = null;

    /**
     * `true` - enable for this application sign in with Google; `false` - disable.
     *
     * @var bool|null
     */
    public ?bool $is_google = null;

    /**
     * `true` - enable for this application sign in with Microsoft; `false` - disable.
     *
     * @var bool|null
     */
    public ?bool $is_microsoft = null;

    /**
     * `true` - registration of new user is denied in application; `false` - registration of new user is allowed.
     *
     * @var bool|null
     */
    public ?bool $is_register_deny = null;

    /**
     * `true` if sign in via social networks is allowed; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_social = null;

    /**
     * `true` if sign in via TJX Azure is allowed; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_tjx = null;

    /**
     * Tjx button name.
     *
     * @var string|null
     */
    public ?string $text_tjx_button_name = null;

    /**
     * Facebook authorization link.
     *
     * @var string|null
     */
    public ?string $url_facebook = null;

    /**
     * Link to the logo of the business.
     *
     * @var string|null
     */
    public ?string $url_logo = null;

    /**
     * Tjx link.
     *
     * @var string|null
     */
    public ?string $url_tjx = null;

    public function __construct(array $data)
    {
        $this->is_apple = isset($data['is_apple']) ? (bool)$data['is_apple'] : null;
        $this->is_facebook = isset($data['is_facebook']) ? (bool)$data['is_facebook'] : null;
        $this->is_facebook_android = isset($data['is_facebook_android']) ? (bool)$data['is_facebook_android'] : null;
        $this->is_google = isset($data['is_google']) ? (bool)$data['is_google'] : null;
        $this->is_microsoft = isset($data['is_microsoft']) ? (bool)$data['is_microsoft'] : null;
        $this->is_register_deny = isset($data['is_register_deny']) ? (bool)$data['is_register_deny'] : null;
        $this->is_social = isset($data['is_social']) ? (bool)$data['is_social'] : null;
        $this->is_tjx = isset($data['is_tjx']) ? (bool)$data['is_tjx'] : null;
        $this->text_tjx_button_name = isset($data['text_tjx_button_name']) ? (string)$data['text_tjx_button_name'] : null;
        $this->url_facebook = isset($data['url_facebook']) ? (string)$data['url_facebook'] : null;
        $this->url_logo = isset($data['url_logo']) ? (string)$data['url_logo'] : null;
        $this->url_tjx = isset($data['url_tjx']) ? (string)$data['url_tjx'] : null;
    }
}
