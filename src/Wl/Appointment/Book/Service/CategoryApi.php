<?php
namespace WlSdk\Wl\Appointment\Book\Service;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list of information about service categories on the appointment booking page.
 */
class CategoryApi
{
    /**
     * List of user keys to book appointments.
     * There may be empty values in this list, which means that this is a walk-in.
     *
     * @var string[]|null
     */
    public ?array $a_uid = null;

    /**
     * `true` - return all service categories for a certain location.
     * `false` - return only service categories that are associated with a book tab and with staff members
     * able to conduct them.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * Whether a flagged client is allowed to retrieve categories.
     * `true` - allowed, `false` - not allowed.
     *
     * @var bool|null
     */
    public ?bool $is_flag_ignore = null;

    /**
     * `true` - search in all tabs.
     * `false` - search only for the selected book tab.
     *
     * @var bool|null
     */
    public ?bool $is_tab_all = null;

    /**
     * If `true`, the client is a walk-in. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_walk_in = null;

    /**
     * The class tab key used to filter services.
     *
     * @var string|null
     */
    public ?string $k_class_tab = null;

    /**
     * Location to show available appointment booking schedule.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The user key.
     * 
     * This field is used if the client books for himself or for the relative.
     * 
     * This field is incorrect to use for guest booking since in this case the client will be checked as a
     * relative.
     * 
     * In case of a group booking or a guest booking, the key of the client who is making the booking is set here.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves a list of information about service categories on the appointment booking page.
     *
     * Returns all service categories available at the given location, optionally filtered by book now tab.
     *  Each category includes its title and the list of available services. Supports both frontend and
     *  backend modes; in backend mode access is verified against the business.
     *
     * @return CategoryApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): CategoryApiGetResponse
    {
        return new CategoryApiGetResponse($this->client->request('/Wl/Appointment/Book/Service/Category.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'a_uid' => $this->a_uid,
            'is_backend' => $this->is_backend,
            'is_flag_ignore' => $this->is_flag_ignore,
            'is_tab_all' => $this->is_tab_all,
            'is_walk_in' => $this->is_walk_in,
            'k_class_tab' => $this->k_class_tab,
            'k_location' => $this->k_location,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
