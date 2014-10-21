<?php
namespace Scarbous\fcsc\ViewHelpers\Format;


class BytesViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {
    
    /**
     * @param integer $bytes
     * 
     * @return string
     */
    public function render($bytes=NULL) {
    	if ($bytes === NULL) :
			$bytes = $this->renderChildren();
		endif;
        return \TYPO3\CMS\Core\Utility\GeneralUtility::formatSize($bytes);
    }
}