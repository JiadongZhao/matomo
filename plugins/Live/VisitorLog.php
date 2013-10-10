<?php
/**
 * Piwik - Open source web analytics
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 * @category Piwik_Plugins
 * @package Live
 */
namespace Piwik\Plugins\Live;

use Piwik\View;
use Piwik\ViewDataTable\Visualization;

/**
 * A special DataTable visualization for the Live.getLastVisitsDetails API method.
 */
class VisitorLog extends Visualization
{
    static public $clientSideParameters = array(
        'filter_limit',
        'filter_offset',
        'filter_sort_column',
        'filter_sort_order',
    );

    protected $templateFile = "@Live/_dataTableViz_visitorLog.twig";

    /**
     * Init.
     */
    public function init($view)
    {
        $view->datatable_js_type = 'VisitorLog';
    }
}