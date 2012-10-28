<?php
/**
 * Piwik - Open source web analytics
 * 
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 * @version $Id: LanguageToCountry.php 5802 2012-02-11 08:39:46Z matt $
 * 
 * @category Piwik
 * @package DataFiles
 */

/**
 * Language to Country mapping
 *
 * This list is used to guess the visitor's country when the region is
 * not specified in the first language tag.  Inclusion/exclusion is
 * based on Piwik.org visitor statistics and probability of disambiguation.
 * (Notably, "en" and "zh" are excluded.)
 *
 * If you want to add a new entry, please email us at hello at piwik.org
 */
if(!isset($GLOBALS['Piwik_LanguageToCountry']))
{
	$GLOBALS['Piwik_LanguageToCountry'] = array(
			'bg' => 'bg',	// Bulgarian  => Bulgaria
			'ca' => 'es',	// Catalan    => Spain
			'cs' => 'cz',	// Czech      => Czech Republic
			'da' => 'dk',	// Danish     => Denmark
			'de' => 'de',	// German     => Germany
			'el' => 'gr',	// Greek      => Greece
			'es' => 'es',	// Spanish    => Spain
			'et' => 'ee',	// Estonian   => Estonia
			'fa' => 'ir',	// Farsi      => Iran
			'fi' => 'fi',	// Finnish    => Finland
			'fr' => 'fr',	// French     => France
			'he' => 'il',	// Hebrew     => Israel
			'hr' => 'hr',	// Croatian   => Croatia
			'hu' => 'hu',	// Hungarian  => Hungary
			'id' => 'id',	// Indonesian => Indonesia
			'is' => 'is',	// Icelandic  => Iceland
			'it' => 'it',	// Italian    => Italy
			'ja' => 'jp',	// Japanese   => Japan
			'ko' => 'kr',	// Korean     => South Korea
			'lt' => 'lt',	// Lithuanian => Lithuania
			'lv' => 'lv',	// Latvian    => Latvia
			'mk' => 'mk',	// Macedonian => Macedonia
			'ms' => 'my',	// Malay      => Malaysia
			'nb' => 'no',	// Bokmål     => Norway
			'nl' => 'nl',	// Dutch      => Netherlands
			'nn' => 'no',	// Nynorsk    => Norway
			'no' => 'no',	// Norwegian  => Norway
			'pl' => 'pl',	// Polish     => Poland
			'pt' => 'pt',	// Portugese  => Portugal
			'ro' => 'ro',	// Romanian   => Romania
			'ru' => 'ru',	// Russian    => Russia
			'sk' => 'sk',	// Slovak     => Slovakia
			'sl' => 'si',	// Slovene    => Slovenia
			'sq' => 'al',	// Albanian   => Albania
			'sr' => 'rs',	// Serbian    => Serbia
			'sv' => 'se',	// Swedish    => Sweden
			'th' => 'th',	// Thai       => Thailand
			'bo' => 'ti',	// Tibetan    => Tibet
			'tr' => 'tr',	// Turkish    => Turkey
			'uk' => 'ua',	// Ukrainian  => Ukraine
		);
}
