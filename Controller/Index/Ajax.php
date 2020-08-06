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

namespace ImranAli\Faq\Controller\Index;

class Ajax extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    private $resultPageFactory;

    protected $resultJsonFactory;

    /**
     * @var \ImranAli\Faq\Helper\Data
     */
    protected $helper;

    /**
     * Index constructor.
     * @param \Magento\Framework\App\Action\Context $context
     * @param \ImranAli\Faq\Helper\Data $helper
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \ImranAli\Faq\Helper\Data $helper,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory
    ) {
        $this->helper = $helper;
        $this->resultPageFactory = $resultPageFactory;
        $this->resultJsonFactory = $resultJsonFactory;
        parent::__construct($context);
    }

    /**
     * Execute view action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $groupId = $this->getRequest()->getParam('groupId');
        $block = $resultPage->getLayout()
            ->createBlock('ImranAli\Faq\Block\Index\Index')
            ->setTemplate('ImranAli_Faq::faq_ajax.phtml')
            ->setGroupId($groupId)
            ->toHtml();

        $resultJson = $this->resultJsonFactory->create();
        $resultJson->setData(['faq' => $block]);

        return $resultJson;
    }
}
