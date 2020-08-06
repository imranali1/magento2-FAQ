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

interface FaqInterface
{

    const TITLE = 'title';
    const SORTORDER = 'sortorder';
    const FAQ_ID = 'faq_id';
    const CONTENT = 'content';
    const STATUS = 'status';

    /**
     * Get faq_id
     * @return string|null
     */
    
    public function getFaqId();

    /**
     * Set faq_id
     * @param string $faq_id
     * @return \ImranAli\Faq\Api\Data\FaqInterface
     */
    
    public function setFaqId($faqId);

    /**
     * Get title
     * @return string|null
     */
    
    public function getTitle();

    /**
     * Set title
     * @param string $title
     * @return \ImranAli\Faq\Api\Data\FaqInterface
     */
    
    public function setTitle($title);

    /**
     * Get content
     * @return string|null
     */
    
    public function getContent();

    /**
     * Set content
     * @param string $content
     * @return \ImranAli\Faq\Api\Data\FaqInterface
     */
    
    public function setContent($content);

    /**
     * Get sortorder
     * @return string|null
     */
    
    public function getSortorder();

    /**
     * Set sortorder
     * @param string $sortorder
     * @return \ImranAli\Faq\Api\Data\FaqInterface
     */
    
    public function setSortorder($sortorder);

    /**
     * Get status
     * @return string|null
     */
    
    public function getStatus();

    /**
     * Set status
     * @param string $status
     * @return \ImranAli\Faq\Api\Data\FaqInterface
     */
    
    public function setStatus($status);
}
