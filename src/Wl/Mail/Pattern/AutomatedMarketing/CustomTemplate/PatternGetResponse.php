<?php

namespace WlSdk\Wl\Mail\Pattern\AutomatedMarketing\CustomTemplate;

/**
 * Response from GET
 */
class PatternGetResponse
{
    /**
     * Business data.
     *
     * @var PatternGetResponseBusinessData|null
     */
    public ?PatternGetResponseBusinessData $a_business_data = null;

    /**
     * Help data for variables.
     *
     * `null` for pushes.
     *
     * @var PatternGetResponseHelpData|null
     */
    public ?PatternGetResponseHelpData $a_help_data = null;

    /**
     * Mail pattern data to load.
     *
     * @var PatternGetResponsePatternLoad|null
     */
    public ?PatternGetResponsePatternLoad $a_pattern_load = null;

    /**
     * Default mail pattern data to load.
     *
     * @var PatternGetResponsePatternLoadDefault|null
     */
    public ?PatternGetResponsePatternLoadDefault $a_pattern_load_default = null;

    /**
     * List of mail patterns data to load.
     * Each element has the structure, described in `a_pattern_load`.
     *
     * @var string|null
     */
    public ?string $json_pattern_list_load = null;

    /**
     * Business sender phone formatted.
     *
     * @var string|null
     */
    public ?string $text_phone_formatted = null;

    public function __construct(array $data)
    {
        $this->a_business_data = isset($data['a_business_data']) ? new PatternGetResponseBusinessData((array)$data['a_business_data']) : null;
        $this->a_help_data = isset($data['a_help_data']) ? new PatternGetResponseHelpData((array)$data['a_help_data']) : null;
        $this->a_pattern_load = isset($data['a_pattern_load']) ? new PatternGetResponsePatternLoad((array)$data['a_pattern_load']) : null;
        $this->a_pattern_load_default = isset($data['a_pattern_load_default']) ? new PatternGetResponsePatternLoadDefault((array)$data['a_pattern_load_default']) : null;
        $this->json_pattern_list_load = isset($data['json_pattern_list_load']) ? (string)$data['json_pattern_list_load'] : null;
        $this->text_phone_formatted = isset($data['text_phone_formatted']) ? (string)$data['text_phone_formatted'] : null;
    }
}
