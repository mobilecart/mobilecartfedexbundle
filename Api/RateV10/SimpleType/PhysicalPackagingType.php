<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * This enumeration rationalizes the former FedEx Express international "admissibility package" 
 * types (based on ANSI X.12) and the FedEx Freight packaging types. The values represented 
 * are those common to both carriers. 
 *
 *
 */
class PhysicalPackagingType extends SimpleTypeAbstract
{
    const BAG = 'BAG';

    const BARREL = 'BARREL';

    const BASKET = 'BASKET';

    const BOX = 'BOX';

    const BUCKET = 'BUCKET';

    const BUNDLE = 'BUNDLE';

    const CARTON = 'CARTON';

    const CASE = 'CASE';

    const CONTAINER = 'CONTAINER';

    const CRATE = 'CRATE';

    const CYLINDER = 'CYLINDER';

    const DRUM = 'DRUM';

    const ENVELOPE = 'ENVELOPE';

    const HAMPER = 'HAMPER';

    const OTHER = 'OTHER';

    const PAIL = 'PAIL';

    const PALLET = 'PALLET';

    const PIECE = 'PIECE';

    const REEL = 'REEL';

    const ROLL = 'ROLL';

    const SKID = 'SKID';

    const TANK = 'TANK';

    const TUBE = 'TUBE';


}

