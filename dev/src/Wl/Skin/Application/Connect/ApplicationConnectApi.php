<?php
namespace WlSdk\Wl\Skin\Application\Connect;

use WlSdk\WlSdkClient;

/**
 * Creates or updates the integration credentials for the given business application.
 */
class ApplicationConnectApi
{
    /**
     * `true` to enable Sign In with Apple for this application, `false` to disable.
     *
     * @var bool|null
     */
    public ?bool $is_apple = null;

    /**
     * `true` to enable Sign In with Facebook (iOS) for this application, `false` to disable.
     *
     * @var bool|null
     */
    public ?bool $is_facebook = null;

    /**
     * `true` to enable Sign In with Facebook (Android) for this application, `false` to disable.
     *
     * @var bool|null
     */
    public ?bool $is_facebook_android = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Firebase service account private key (JSON content of the `.p8`-equivalent key file).
     *
     * @var string|null
     */
    public ?string $s_firebase_key = null;

    /**
     * Firebase project ID.
     *
     * @var string|null
     */
    public ?string $s_firebase_project = null;

    /**
     * Google OAuth client ID.
     *
     * @var string|null
     */
    public ?string $s_google_id = null;

    /**
     * Reversed Google OAuth client ID (iOS URL scheme).
     *
     * @var string|null
     */
    public ?string $s_google_reverse = null;

    /**
     * Google OAuth client secret.
     *
     * @var string|null
     */
    public ?string $s_google_secret = null;

    /**
     * Sign In with Apple key (`.p8` file content).
     *
     * @var string|null
     */
    public ?string $text_cert_ios_login = null;

    /**
     * APNs push notification auth key (`.p8` file content).
     *
     * @var string|null
     */
    public ?string $text_cert_ios_push = null;

    /**
     * Bundle ID used as the application identifier.
     *
     * @var string|null
     */
    public ?string $text_domain = null;

    /**
     * Sign In with Apple key ID.
     *
     * @var string|null
     */
    public ?string $text_key_login_id = null;

    /**
     * APNs push notification key ID.
     *
     * @var string|null
     */
    public ?string $text_key_push_id = null;

    /**
     * Application display name.
     *
     * @var string|null
     */
    public ?string $text_name = null;

    /**
     * Apple Developer Team ID.
     *
     * @var string|null
     */
    public ?string $text_team_id = null;

    /**
     * Google OAuth redirect URL.
     *
     * @var string|null
     */
    public ?string $url_google_redirect = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Creates or updates the integration credentials for the given business application.
     *
     * If a record already exists for `k_business`, it is updated
     * in place. Otherwise, a new record is created and linked to the business.
     *
     * @return ApplicationConnectApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): ApplicationConnectApiPostResponse
    {
        return new ApplicationConnectApiPostResponse($this->client->request('/Wl/Skin/Application/Connect/ApplicationConnect.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'is_apple' => $this->is_apple,
            'is_facebook' => $this->is_facebook,
            'is_facebook_android' => $this->is_facebook_android,
            'k_business' => $this->k_business,
            's_firebase_key' => $this->s_firebase_key,
            's_firebase_project' => $this->s_firebase_project,
            's_google_id' => $this->s_google_id,
            's_google_reverse' => $this->s_google_reverse,
            's_google_secret' => $this->s_google_secret,
            'text_cert_ios_login' => $this->text_cert_ios_login,
            'text_cert_ios_push' => $this->text_cert_ios_push,
            'text_domain' => $this->text_domain,
            'text_key_login_id' => $this->text_key_login_id,
            'text_key_push_id' => $this->text_key_push_id,
            'text_name' => $this->text_name,
            'text_team_id' => $this->text_team_id,
            'url_google_redirect' => $this->url_google_redirect,
            ],
            static fn($v) => $v !== null
        );
    }
}
