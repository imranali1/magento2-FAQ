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

namespace ImranAli\Faq\Block;

class FooterLink extends \Magento\Framework\View\Element\Html\Link
{
    public function _toHtml() 
    {
        if (
            !$this->_scopeConfig->isSetFlag('faqtab/general/enable') ||
            !$this->_scopeConfig->isSetFlag('faqtab/design/footerlink')
        ) {
            return '';
        }
        return parent::_toHtml();
    }
}
