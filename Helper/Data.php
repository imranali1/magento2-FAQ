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

namespace ImranAli\Faq\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    const FAQ_URL_CONFIG_PATH = 'faqtab/seo/faq_url';

    /**
     * Get config path
     * @param $config
     * @return mixed
     */
    public function getConfig($config)
    {
        return $this->scopeConfig->getValue(
            $config,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get faq url
     * @return string
     */
    public function getFaqUrl()
    {
        return $this->getConfig(self::FAQ_URL_CONFIG_PATH);
    }
}
