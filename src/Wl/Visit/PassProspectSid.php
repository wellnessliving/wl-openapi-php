<?php
namespace WlSdk\Wl\Visit;

/**
 * List foreign sites that can pay for visits.
 * 
 * Last used ID: 2.
 * 
 * Values:
 * - 1 (`CLASSPASS`): Class Pass.
 * - 2 (`GYMPASS`): Gym Pass.
 */
enum PassProspectSid: int
{
    case CLASSPASS = 1;
    case GYMPASS = 2;
}
