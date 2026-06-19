<?php
namespace WlSdk\Wl\Staff\StaffView;

/**
 * Response from GET
 */
class StaffViewApiGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_class_day = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_result_list = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_staff = null;

    public function __construct(array $data)
    {
        $this->a_class_day = isset($data['a_class_day']) ? (array)$data['a_class_day'] : null;
        $this->a_result_list = isset($data['a_result_list']) ? (array)$data['a_result_list'] : null;
        $this->a_staff = isset($data['a_staff']) ? (array)$data['a_staff'] : null;
    }
}
