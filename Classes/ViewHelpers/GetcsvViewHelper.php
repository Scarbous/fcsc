<?php
namespace Scarbous\fcsc\ViewHelpers;
use \TYPO3\CMS\Core\Utility\GeneralUtility;

class GetcsvViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {
    /**
     * @param string $csv
	 * @param integer $delimiter
     * @param string $quotedInput
     * 
     * @return array
     */
    public function render($csv, $delimiter = 124, $quotedInput = NULL) {
    	$rows = GeneralUtility::trimExplode(LF, $csv);
		$csv = array();
		$delimiter = chr(intval($delimiter));
		$quotedInput = $quotedInput == NULL ? NULL : chr(intval($quotedInput));
		foreach($rows as $row) :
			$csv[] = str_getcsv($row, $delimiter, $quotedInput);
		endforeach;
		return $csv;
    }
}