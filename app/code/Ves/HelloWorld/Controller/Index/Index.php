<?php 
// Mage::setIsDeveloperMode(true);
// error_reporting(E_ALL);
// ini_set("display_errors", 1);
namespace Ves\HelloWorld\Controller\Index; 

use \Magento\Framework\App\Action\Action;
 
class Index extends Action {
    /** @var  \Magento\Framework\View\Result\Page */
    protected $resultPageFactory;
    /**      * @param \Magento\Framework\App\Action\Context $context      */
    public function __construct(\Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory)     {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }
 
    /**
     * Blog Index, shows a list of recent blog posts.
     *
     * @return \Magento\Framework\View\Result\PageFactory
     */
    public function execute()
    {
        echo "hii";
    	$resultPage = $this->resultPageFactory->create();
    	$resultPage->getConfig()->getTitle()->prepend(__('Ves HelloWorld'));
    	return $resultPage;
    }
}
 