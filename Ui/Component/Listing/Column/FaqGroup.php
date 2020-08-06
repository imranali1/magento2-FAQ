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

class FaqGroup implements \Magento\Framework\Option\ArrayInterface
{
    private $groupCollection;

    public function __construct(
        \ImranAli\Faq\Model\ResourceModel\FaqGroup\CollectionFactory $groupCollection
    ) {
        $this->groupCollection = $groupCollection;
    }

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        $groupArr = [];
        $groups = $this->groupCollection->create();

        foreach ($groups as $group) {
            $groupArr[] = ['value' => $group->getFaqgroupId(), 'label' => __($group->getGroupname())];
        }

        return $groupArr;
    }
}
