<?php
namespace Scarbous\fcsc\ViewHelpers;


class GetImageSizeViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {
    /**
     * @param integer $cols
	 * @param integer $orientation
     * @param integer $padding
	 * @param integer $contentWidth
     * 
     * @return integer
     */
    public function render($cols, $orientation=NULL, $padding=NULL, $contentWidth=NULL) {
    	
		$settings = $this->templateVariableContainer->get('settings');
		$orientation;
		if($padding == NULL)
			$padding = $settings['images']['padding'];
		
		if($contentWidth == NULL)
			$contentWidth = $settings['images']['contentWidth'];
		if( in_array($orientation, array( 17,18,25,26)) )
			$contentWidth = $contentWidth/2;

		$imageWidth = ($contentWidth - $cols*$padding) / $cols;
		
		
				
		return( $imageWidth );
		
    }
}