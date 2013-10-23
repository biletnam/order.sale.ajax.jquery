<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?
	$properties = $arResult["ORDER_PROP"]["USER_PROPS_N"];
?>
<? Utils::debugMode(); ?>
<div class="order-form">
	<table class="labelfield-table" cellpadding="0">
		<? foreach($properties as $property): ?>
			<? //Utils::pvd(Array($property["NAME"], $property["TYPE"])); ?>
			<tr class="hidden" id="row_<?=$property['CODE']?>">
				<? // LABEL ?>
				<td class="labelfield-name">
					<span><?=$property["NAME"]?></span>
				</td>
				
				<? // FIELD ?>
				<td class="labelfield-input">
					<? if($property["TYPE"] == "TEXT"): ?>
						<input id="orderfield_<?=$property['CODE']?>" type="text" class="orderfield-text" name="<?=$property["FIELD_NAME"]?>">
					<? endif; ?>

					<? if($property["TYPE"] == "LOCATION"): ?>
						<input type="hidden" id="<?=$property["FIELD_ID"]?>" name="<?=$property["FIELD_NAME"]?>">
						<input type="text" class="orderfield-location" id="<?=$property["FIELD_ID"].'_VAL'?>">
					<? endif; ?>

					<? if($property["TYPE"] == "CHECKBOX"): ?>
						<? Utils::dmsg("TODO: add code for CHECKBOX property"); ?>
					<? endif; ?>

					<? if($property["TYPE"] == "SELECT"): ?>
						<? Utils::dmsg("TODO: add code for SELECT property"); ?>
					<? endif; ?>

					<? if($property["TYPE"] == "MULTISELECT"): ?>
						<? Utils::dmsg("TODO: add code for MULTISELECT property"); ?>
					<? endif; ?>

					<? if($property["TYPE"] == "TEXTAREA"): ?>
						<? Utils::dmsg("TODO: add code for TEXTAREA property"); ?>
					<? endif; ?>

					<? if($property["TYPE"] == "RADIO"): ?>
						<? Utils::dmsg("TODO: add code for RADIO property"); ?>
					<? endif; ?>
				</td>
			</tr>
		<? endforeach; ?>
	</table>
</div>