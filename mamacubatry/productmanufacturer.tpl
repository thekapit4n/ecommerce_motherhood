<!--start display product's manufacturer-->
{if $productmanufacturer}
<div class="product_manufacturer">
	<table>
		<tr>
			<td style="padding-bottom: 4px; padding-top: 1px; padding-left: 1px; padding-right: 3px; width: 100px">{l s='Brand' mod='blockmanufacturer'}</td>
			<td style="padding-bottom: 4px; padding-top: 1px; padding-left: 1px; width:171px;">
				<a href="{$link->getManufacturerLinkWithShop($productmanufacturer->id_manufacturer, $manufacturerlink, null, 1)|escape:'html'}" title="{$productmanufacturer->name}">
					{$productmanufacturer->name}
				</a>
			</td>
		</tr>
	</table>
</div>
{/if}
<!--end display product's manufacturer-->
