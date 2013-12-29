<?php

/**
  * PHP version 5
 * @copyright  Leo Feyer 2005-2011
 * @author     Leo Feyer <http://www.contao.org>
 * @package    Backend
 * @license    LGPL
 * @filesource
 */


/**
 * Class lm_fixes
 *
 * @copyright  2010 Andreas Koob
 * @author     Andreas Koob
 * @package    Controller
 */
class lm_fixes extends Backend
{
	public function fixMatches()
	{
		$objMatches=$this->Database->prepare("SELECT * FROM tl_lm_matches")->execute();
		$i=0;
		while ($objMatches->next())
		{
			$i++;
			$arrSet['starttime'] = strtotime(date('Y-m-d', $objMatches->startdate) . ' ' . date('H:i:s', $objMatches->starttime));
			$arrSet['endtime'] = strtotime(date('Y-m-d', $objMatches->enddate) . ' ' . date('H:i:s', $objMatches->endtime));
			$this->Database->prepare("UPDATE tl_lm_matches %s WHERE id=?")->set($arrSet)->execute($objMatches->id);
		}
		return '
		<div id="tl_buttons">
			<a href="'.ampersand(str_replace('&key=fixMatches', '', $this->Environment->request)).'" class="header_back" title="'.specialchars($GLOBALS['TL_LANG']['MSC']['backBT']).'" accesskey="b">'.$GLOBALS['TL_LANG']['MSC']['backBT'].'</a>
		</div>

		<h2 class="sub_headline">'.$GLOBALS['TL_LANG']['tl_lm_contests']['fixMatches'][0].'</h2><br />'.
		$i . ' matches updated';
	}

}
