<?php

declare(strict_types=1);

namespace App;

enum ListingTypeEnum: string
{
    case APP = 'app';
    case PLACE = 'place';
    case WEBSITE = 'website';
    case IN_PERSON_SUPPORT_GROUP = 'support group (face to face)';
    case ONLINE_SUPPORT_GROUP = 'support group (online)';
}
