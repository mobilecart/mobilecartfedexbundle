<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Required for dutiable international express or ground shipment. This field is not applicable 
 * to an international PIB (document) or a non-document which does not require a commercial 
 * invoice express shipment.
            CFR_OR_CPT (Cost and Freight/Carriage Paid TO)
   
 *          CIF_OR_CIP (Cost Insurance and Freight/Carraige Insurance Paid)
            DDP 
 * (Delivered Duty Paid)
            DDU (Delivered Duty Unpaid)
            EXW (Ex Works)
 
 *            FOB_OR_FCA (Free On Board/Free Carrier) 
 *
 *
 */
class TermsOfSaleType extends SimpleTypeAbstract
{
    const CFR_OR_CPT = 'CFR_OR_CPT';

    const CIF_OR_CIP = 'CIF_OR_CIP';

    const DDP = 'DDP';

    const DDU = 'DDU';

    const EXW = 'EXW';

    const FOB_OR_FCA = 'FOB_OR_FCA';


}

