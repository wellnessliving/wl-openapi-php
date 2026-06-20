<?php
namespace WlSdk\Wl\Appointment\Book\Service;

/**
 * Response from GET
 */
class CategoryGetResponse
{
    /**
     * A list of information about service categories.
     *
     * @var CategoryGetResponseCategory|null
     */
    public ?CategoryGetResponseCategory $a_category = null;

    /**
     * `true` - if client has a flag, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_client_flag = null;

    /**
     * Location to show available appointment booking schedule.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    public function __construct(array $data)
    {
        $this->a_category = isset($data['a_category']) ? new CategoryGetResponseCategory((array)$data['a_category']) : null;
        $this->is_client_flag = isset($data['is_client_flag']) ? (bool)$data['is_client_flag'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
    }
}
