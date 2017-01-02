<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Used to indicate whether the Destination Control Statement is of type Department of Commerce, 
 * Department of State or both. 
 *
 *
 */
class DestinationControlStatementType extends SimpleTypeAbstract
{
    const DEPARTMENT_OF_COMMERCE = 'DEPARTMENT_OF_COMMERCE';

    const DEPARTMENT_OF_STATE = 'DEPARTMENT_OF_STATE';


}

