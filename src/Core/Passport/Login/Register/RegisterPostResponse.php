<?php
namespace WlSdk\Core\Passport\Login\Register;

/**
 * Response from POST
 */
class RegisterPostResponse
{
    /**
     * JSON configuration for confirmation email.
     *
     * @var string|null
     */
    public ?string $json_confirm_config = null;

    /**
     * The URL to the confirmation page. This link is used in a confirmation email.
     * 
     * If empty, URL to default page is used.
     *
     * @var string|null
     */
    public ?string $url_confirm = null;

    public function __construct(array $data)
    {
        $this->json_confirm_config = isset($data['json_confirm_config']) ? (string)$data['json_confirm_config'] : null;
        $this->url_confirm = isset($data['url_confirm']) ? (string)$data['url_confirm'] : null;
    }
}
