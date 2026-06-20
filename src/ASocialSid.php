<?php
namespace WlSdk;

/**
 * A list of supported social networks.
 * 
 * Last used ID: 3.
 * 
 * Values:
 * - 1 (`FACEBOOK`): Facebook social network.
 * - 2 (`GOOGLE`): Google Plus social network.
 * - 3 (`TWITTER`): Twitter social network.
 */
enum ASocialSid: int
{
    case FACEBOOK = 1;
    case GOOGLE = 2;
    case TWITTER = 3;
}
