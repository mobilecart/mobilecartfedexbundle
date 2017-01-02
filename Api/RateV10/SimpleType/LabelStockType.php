<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * For thermal printer labels this indicates the size of the label and the location of the 
 * doc tab if present. 
 *
 *
 */
class LabelStockType extends SimpleTypeAbstract
{
    const PAPER_4X6 = 'PAPER_4X6';

    const PAPER_4X8 = 'PAPER_4X8';

    const PAPER_4X9 = 'PAPER_4X9';

    const PAPER_7X4POINT75 = 'PAPER_7X4.75';

    const PAPER_8POINT5X11_BOTTOM_HALF_LABEL = 'PAPER_8.5X11_BOTTOM_HALF_LABEL';

    const PAPER_8POINT5X11_TOP_HALF_LABEL = 'PAPER_8.5X11_TOP_HALF_LABEL';

    const STOCK_4X6 = 'STOCK_4X6';

    const STOCK_4X6POINT75_LEADING_DOC_TAB = 'STOCK_4X6.75_LEADING_DOC_TAB';

    const STOCK_4X6POINT75_TRAILING_DOC_TAB = 'STOCK_4X6.75_TRAILING_DOC_TAB';

    const STOCK_4X8 = 'STOCK_4X8';

    const STOCK_4X9_LEADING_DOC_TAB = 'STOCK_4X9_LEADING_DOC_TAB';

    const STOCK_4X9_TRAILING_DOC_TAB = 'STOCK_4X9_TRAILING_DOC_TAB';


}

