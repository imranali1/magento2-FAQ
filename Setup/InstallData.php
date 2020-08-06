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

namespace ImranAli\Faq\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
    	$table_prince_faqgroup = $setup->getTable('prince_faqgroup');
    	$table_prince_faq = $setup->getTable('prince_faq');

        $setup->getConnection()->query("INSERT INTO $table_prince_faqgroup (`groupname`, `sortorder`, `storeview`, `customer_group`, `status`) VALUES('General', '1', '0,1,2,3,4', '0,1,2,3,4', '1')");
        $setup->getConnection()->query("INSERT INTO $table_prince_faq (`title`, `content`, `group`, `storeview`, `customer_group`, `sortorder`, `status`) VALUES ('This is test FAQ question', 'This is test FAQ answer', '1', '1', '0,1,2,3,4', '0', '1')");
    }
}
