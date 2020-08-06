<?php

/**
 * ImranAli
 * Copyright (C) 2020 ImranAli <imibrohi@gmail.com>
 *
 * @package ImranAli_Faq
 * @copyright Copyright (c) 2020 ImranAli
 * @license http://opensource.org/licenses/gpl-3.0.html GNU General Public License,version 3 (GPL-3.0)
 * @author Imran Ali <imibrohi@gmail.com>
 */

namespace ImranAli\Faq\Ui\Component\Listing\Column;

class FaqIds implements \Magento\Framework\Option\ArrayInterface
{
    private $faqCollection;

    public function __construct(
        \ImranAli\Faq\Model\ResourceModel\Faq\CollectionFactory $faqCollection
    ) {
        $this->faqCollection = $faqCollection;
    }

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        $faqArr = [];
        $faqs = $this->faqCollection->create();

        foreach ($faqs as $faq) {
            $faqArr[] = ['value' => $faq->getFaqId(), 'label' => __($faq->getTitle())];
        }

        return $faqArr;
    }
}
