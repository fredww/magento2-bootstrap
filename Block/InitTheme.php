<?php
/**
 * Copyright © 2017 MageCheck - All rights reserved.
 * See LICENSE.md bundled with this module for license details.
 */

namespace MageCheck\Bootstrap\Block;

class InitTheme extends \Magento\Backend\Block\AbstractBlock
{
    /**
     * @var \Magento\Framework\ObjectManagerInterface
     */
    private $objectManager;
    
    /**
     * @override
     * @see \Magento\Backend\Block\AbstractBlock::_construct()
     * @param \Magento\Backend\Block\Context $context
     * @param \Magento\Framework\ObjectManagerInterface $objectmanager
     * @param array $data
     * @return void
     */
    public function __construct(
            \Magento\Backend\Block\Context $context,
            \Magento\Framework\ObjectManagerInterface $objectmanager,
            array $data = [])
    {
        $this->objectManager = $objectmanager;

        /** @var \Magento\Framework\View\Page\Config $page */
        $page = $this->objectManager->get('Magento\Framework\View\Page\Config');
        $page->addPageAsset('MageCheck_Bootstrap::bootstrap-3.3.7/css/bootstrap-theme.min.css');

        parent::__construct($context, $data);
    }
}
