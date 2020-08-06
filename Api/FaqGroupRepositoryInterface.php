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

namespace ImranAli\Faq\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface FaqGroupRepositoryInterface
{

    /**
     * Save FaqGroup
     * @param \ImranAli\Faq\Api\Data\FaqGroupInterface $faqGroup
     * @return \ImranAli\Faq\Api\Data\FaqGroupInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    
    public function save(
        \ImranAli\Faq\Api\Data\FaqGroupInterface $faqGroup
    );

    /**
     * Retrieve FaqGroup
     * @param string $faqgroupId
     * @return \ImranAli\Faq\Api\Data\FaqGroupInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    
    public function getById($faqgroupId);

    /**
     * Retrieve FaqGroup matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \ImranAli\Faq\Api\Data\FaqGroupSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete FaqGroup
     * @param \ImranAli\Faq\Api\Data\FaqGroupInterface $faqGroup
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    
    public function delete(
        \ImranAli\Faq\Api\Data\FaqGroupInterface $faqGroup
    );

    /**
     * Delete FaqGroup by ID
     * @param string $faqgroupId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    
    public function deleteById($faqgroupId);
}
