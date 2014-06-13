<?php
/**
 * Piwik - Open source web analytics
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */
namespace Piwik\Plugins\Referrers\Reports;

abstract class Base extends \Piwik\Plugin\Report
{
    protected function init()
    {
        $this->category = 'Referrers_Referrers';
    }

}