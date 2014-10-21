<?php
namespace Scarbous\fcsc\ViewHelpers\Math;

class ProblemViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {
    /**
     * @param string $a
     * 
     * @return string
     */
	public function render($a = NULL){
    	if ($a === NULL) :
			$a = $this->renderChildren();
		endif;
		return( \TYPO3\CMS\Core\Utility\MathUtility::calculateWithParentheses($a) );
	} 
	
}

