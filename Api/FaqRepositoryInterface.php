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

interface FaqRepositoryInterface
{
    
    /**
     * Save Faq
     * @param \ImranAli\Faq\Api\Data\FaqInterface $faq
     * @return \ImranAli\Faq\Api\Data\FaqInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    
    public function save(\ImranAli\Faq\Api\Data\FaqInterface $faq);

    /**
     * Retrieve Faq
     * @param string $faqId
     * @return \ImranAli\Faq\Api\Data\FaqInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    
    public function getById($faqId);

    /**
     * Retrieve Faq matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \ImranAli\Faq\Api\Data\FaqSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete Faq
     * @param \ImranAli\Faq\Api\Data\FaqInterface $faq
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    
    public function delete(\ImranAli\Faq\Api\Data\FaqInterface $faq);

    /**
     * Delete Faq by ID
     * @param string $faqId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    
    public function deleteById($faqId);
}
