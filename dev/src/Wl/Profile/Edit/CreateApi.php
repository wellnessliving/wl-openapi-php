<?php
namespace WlSdk\Wl\Profile\Edit;

use WlSdk\WlSdkClient;

/**
 * Creates a new user.
 */
class CreateApi
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

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Creates a new user.
     *
     * Creates a new user account with the given email, first name, and last name in the specified
     *  business, registers the user as a member, and returns the `uid` of the created or existing
     *  user.
     *
     * @return CreateApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): CreateApiPostResponse
    {
        return new CreateApiPostResponse($this->client->request('/Wl/Profile/Edit/Create.json', $this->params(), 'POST'));
    }

    private function params(): array
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
