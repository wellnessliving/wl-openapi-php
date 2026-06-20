<?php
namespace WlSdk\Wl\Staff\StaffView;

/**
 * Response from GET
 */
class StaffViewGetResponse
{
    /**
     * No description.
     *
     * @var StaffViewGetResponseClassDay[]|null
     */
    public ?array $a_class_day = null;

    /**
     * No description.
     *
     * @var StaffViewGetResponseResultList[]|null
     */
    public ?array $a_result_list = null;

    /**
     * No description.
     *
     * @var StaffViewGetResponseStaff[]|null
     */
    public ?array $a_staff = null;

    public function __construct(array $data)
    {
        $this->a_class_day = isset($data['a_class_day']) ? array_map(static fn($item) => new StaffViewGetResponseClassDay((array)$item), (array)$data['a_class_day']) : null;
        $this->a_result_list = isset($data['a_result_list']) ? array_map(static fn($item) => new StaffViewGetResponseResultList((array)$item), (array)$data['a_result_list']) : null;
        $this->a_staff = isset($data['a_staff']) ? array_map(static fn($item) => new StaffViewGetResponseStaff((array)$item), (array)$data['a_staff']) : null;
    }
}
