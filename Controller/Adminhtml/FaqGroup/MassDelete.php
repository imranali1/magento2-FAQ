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

namespace ImranAli\Faq\Controller\Adminhtml\FaqGroup;

class MassDelete extends \Magento\Backend\App\Action
{

    /**
     * @var \Magento\Ui\Component\MassAction\Filter
     */
    private $filter;

    /**
     * @var \ImranAli\Faq\Model\ResourceModel\FaqGroup\CollectionFactory
     */
    private $collectionFactory;
    
    public function __construct(
        \Magento\Ui\Component\MassAction\Filter $filter,
        \ImranAli\Faq\Model\ResourceModel\FaqGroup\CollectionFactory $collectionFactory,
        \Magento\Backend\App\Action\Context $context
    ) {
        $this->filter = $filter;
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        try {
            $logCollection = $this->filter->getCollection($this->collectionFactory->create());
            $itemsDeleted = 0;
            foreach ($logCollection as $item) {
                $item->delete();
                $itemsDeleted++;
            }
            $this->messageManager->addSuccess(__('A total of %1 FAQGroup(s) were deleted.', $itemsDeleted));
        } catch (\Exception $e) {
            $this->messageManager->addError($e->getMessage());
        }
        $resultRedirect = $this->resultRedirectFactory->create();
        return $resultRedirect->setPath('ImranAli_Faq/faqgroup');
    }
}
