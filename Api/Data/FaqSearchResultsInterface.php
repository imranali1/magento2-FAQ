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

namespace ImranAli\Faq\Api\Data;

interface FaqSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{
    
    /**
     * Get Faq list.
     * @return \ImranAli\Faq\Api\Data\FaqInterface[]
     */
    
    public function getItems();

    /**
     * Set title list.
     * @param \ImranAli\Faq\Api\Data\FaqInterface[] $items
     * @return $this
     */
    
    public function setItems(array $items);
}
