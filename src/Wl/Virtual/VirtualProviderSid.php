<?php
namespace WlSdk\Wl\Virtual;

/**
 * List of possible value of virtual integrations.
 * 
 * Last used ID: 2.
 * 
 * Values:
 * - 2 (`NON_INTEGRATED`): Virtual integration non implemented.
 * - 1 (`ZOOM`): Virtual Zoom service integration.
 */
enum VirtualProviderSid: int
{
    case NON_INTEGRATED = 2;
    case ZOOM = 1;
}
