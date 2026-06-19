<?php
namespace WlSdk\Wl\Login;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about user.
 */
class LoginApi
{
    /**
     * The height of the requested photo.
     *
     * @var int|null
     */
    public ?int $i_photo_height = null;

    /**
     * The width of the requested photo.
     *
     * @var int|null
     */
    public ?int $i_photo_width = null;

    /**
     * The key of the business. Users can be in multiple businesses.
     * This can be left as `null` to retrieve system-wide information.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the user.
     * 
     * `null` on case when is walk-in client.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * List of users to get information for serialized as JSON string.
     * 
     * `null` for mode of single user.
     *
     * @var string|null
     */
    public ?string $text_uid = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about user.
     *
     * Returns name, gender, photo URL, email, and staff details for the specified user within the given business.
     * Public staff information is returned even without profile access; full client details require access to the
     * user's profile.
     *
     * @return LoginApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): LoginApiGetResponse
    {
        return new LoginApiGetResponse($this->client->request('/Wl/Login/Login.json', $this->params(), 'GET'));
    }

    /**
     * Retrieves information about a list of users.
This is done via "post" method because only "post" allows large requests.
     *
     * Accepts a JSON-encoded array of user keys, validates each one, resolves staff and client roles, and returns
     * name, gender, photo URL, email, and staff details for every user in the list, respecting per-user profile
     * access
     * rules.
     *
     * @return LoginApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): LoginApiPostResponse
    {
        return new LoginApiPostResponse($this->client->request('/Wl/Login/Login.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'i_photo_height' => $this->i_photo_height,
            'i_photo_width' => $this->i_photo_width,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            'text_uid' => $this->text_uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
