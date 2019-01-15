<?php
namespace ve2cuy\helloworld\controler\index;

class Test extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;
    
	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory)
		    {
			$this->_pageFactory = $pageFactory;
			return parent::__construct($context);
		    }
						
	public function execute() 
		    {
			echo "Hello reefsolution 2019";
			exit;
		    }
}