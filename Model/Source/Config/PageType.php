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

namespace ImranAli\Faq\Model\Source\Config;

class PageType implements \Magento\Framework\Data\OptionSourceInterface
{
    const SCROLL = 'scroll';
    const AJAX = 'ajax';

    public function toOptionArray()
    {
        $options = [
            ['value' => self::SCROLL, 'label' => 'Scroll'],
            ['value' => self::AJAX, 'label' => 'Ajax']
        ];

        return $options;
    }
}