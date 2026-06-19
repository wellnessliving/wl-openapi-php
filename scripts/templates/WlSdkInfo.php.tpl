<?php
namespace WlSdk;

/**
 * WellnessLiving PHP SDK build metadata.
 */
class WlSdkInfo
{
    /**
     * SDK channel: 'stable' or 'dev'.
     */
    public const CHANNEL = '{{CHANNEL}}';

    /**
     * OpenAPI specification version used to generate this SDK.
     */
    public const SPEC_VERSION = '{{SPEC_VERSION}}';

    /**
     * Date the SDK was last generated (Y-m-d).
     */
    public const BUILD_DATE = '{{BUILD_DATE}}';

    /**
     * Number of generated API endpoint classes.
     */
    public const ENDPOINT_COUNT = {{ENDPOINT_COUNT}};
}
