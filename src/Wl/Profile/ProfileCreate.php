<?php
namespace WlSdk\Wl\Profile;

use WlSdk\WlSdkClient;

/**
 * Creates a new client profile with the provided personal details in the specified business.
 */
class ProfileCreate
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Creates a new client profile with the provided personal details in the specified business.
     *
     * Creates or retrieves a user account by email or phone, saves personal details such as name,
     *  address, phones, birthday, gender, and vaccination status, registers the user in the
     *  business, and optionally adds them to the lead report and sets intents.
     *
     * @return ProfileCreatePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ProfileCreatePostRequest $request): ProfileCreatePostResponse
    {
        return new ProfileCreatePostResponse($this->client->request('/Wl/Profile/ProfileCreate.json', $request->params(), 'POST'));
    }
}
