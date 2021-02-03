<div id="tabRatingSummary" class="product_seller kapitan-product-detail-sellerrating" style="padding-top: 1px;padding-bottom: 1px;">
	<div>
		<table>
			<tr>
				<td style="padding-bottom: 4px; padding-top: 1px; padding-left: 1px; padding-right: 3px; width: 100px">Seller Review</td>
				<td style="padding-bottom: 4px; padding-top: 1px; padding-left: 1px; font-weight:700;">
					{if $bn_rating_target>0}
						{$average_percentage|round:2}% {*$bn_rating_target*}
					{/if}  
				</td>
			</tr>
			<tr>
				<td style="padding-bottom: 4px; padding-top: 1px; padding-left: 1px; padding-right: 3px; width: 100px">{l s='Seller' mod='enlineamixmod'}</td>
				<td style="padding-bottom: 4px; padding-top: 1px; padding-left: 1px; width:171px" >
					<a href="{if !empty($link2sellerpage)}{$link2sellerpage}{/if}"> {$name_rating_target}</a> &nbsp;
					<br>
					<font style="font-size:10px;">
					{*
						{if isset($onlineStatus) && $onlineStatus == "Online"}
							Online
						{else}
							{$onlineStatus}
						{/if}
					*}
					</font>
				</td>
			</tr>
		</table>
	</div>
</div>
{*
{if $logged}
	<form style="display:inline-block;" action="{$link->getModuleLink("enlineamixmod","enlineamessengercustomer",array(),true)|escape:'html':'UTF-8'}?newchat=1&sellerid={$id_seller}&sellername={$company}&customerid={$id_customer}&productid={$idProduct}" method="post">
		<input type="hidden" name="sellerid" id="sellerid" value="{$id_seller}" />
		<button type="submit" name="startConversation" id="startConversation" value="Chat" class="btn btn-default" style="margin-bottom:10px; background:#30a7ad; color:white; border:none;">Chat Now</button>
	</form>
{else}
<a href="/my-account" class="btn btn-default" style="background:#30a7ad; color:white; border:none;">Login to Chat</a>
{/if} *}