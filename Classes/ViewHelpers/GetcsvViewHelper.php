<?php
namespace Scarbous\fcsc\ViewHelpers;
use \TYPO3\CMS\Core\Utility\GeneralUtility;

class GetcsvViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {
    /**
     * @param string $csv
	 * @param integer $delimiter
     * @param string $quotedInput
     * @param string $as
     * 
     * @return array
     */
    public function render($csv, $delimiter = 124, $quotedInput = NULL, $as = NULL) {
    	$rows = GeneralUtility::trimExplode(LF, $csv);
		$csv = array();
		$delimiter = chr(intval($delimiter));
		$quotedInput = $quotedInput == NULL ? NULL : chr(intval($quotedInput));
		foreach($rows as $row) :
			$csv[] = str_getcsv($row, $delimiter, $quotedInput);
		endforeach;

        if (NULL !== $as) {
            if ($this->templateVariableContainer->exists($as)) {
                $backupVariable = $this->templateVariableContainer->get($as);
                $this->templateVariableContainer->remove($as);
            }
            $this->templateVariableContainer->add($as, $csv);
            $content = $this->renderChildren();
            $this->templateVariableContainer->remove($as);
            if (TRUE === isset($backupVariable)) {
                $this->templateVariableContainer->add($as, $backupVariable);
            }
            return $content;
        }
        return $csv;
    }
}