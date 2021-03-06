<div class="row delivery-address">
	{if !empty($arrAddress)}
		
		{foreach from=$arrAddress item=valAddr}
			{counter assign="countloop"}
			{if $countloop == 1}
				{assign var="checked" value="checked"}
			{else}
				{assign var="checked" value=""}
			{/if}
			<div class="row">
				<div class="col-md-12" >
					<div class="div-address-info">
						<button type="button" class="btn btn-xs btn-info btn-edit-address" data-addressid="{$valAddr['id_address']}" title="edit address"><i class="fas fa-pencil-alt"></i></button>
						<div class="row">
							<div class="col-md-1 col-xs-1" style="text-align: center; vertical-align: middle;text-align: center;vertical-align: middle; padding-right: 0px;">
								<div class="radio div-delivery-addr">
									<label>
										<div class="radio">
											<span class="{$checked}"><input type="radio" name="delivery_address" class="opt-delivery-addr" value="{$valAddr['id_address']}" {$checked}></span>
										</div>
									</label>
								</div>
							</div>
							<div class="col-md-8 col-xs-8 address-details">
								<b>{$valAddr['alias']}</b></font>
								<br/>
								{$valAddr['firstname']} {{$valAddr['lastname']}}<br/>
								<p>
									{$valAddr['address1']},
									{if $valAddr['address2'] != ''}{$valAddr['address2']},{/if} 
								<br/>
								{$valAddr['postcode']} {$valAddr['city']},{$valAddr['statename']}, Malaysia<br>
								</p>
								<p style="margin-top:7px;">{$valAddr['phone_mobile']}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		{/foreach}
	{else}
		<div class="col-md-12" >
		<p class="text-center"><h3>Please add address</h3></p>
		</div>
	{/if}
</div>
<!--
<div class="row">
	<div class="col-md-12" style="padding-left: 15px; padding-right: 15px;">
		<div style="margin-top: 10px; margin-bottom: 10px;">
			<div class="checkbox">
				<label><input type="checkbox" value="yes" class="check-billing-addr" name="same_address_delivery" checked>Billing address same as delivery address</label>
			</div>
		</div>
	</div>
</div>
<div class="row billing-address" style=" padding-left: 15px; padding-right: 15px;">
	<div class="row">
		{if !empty($arrAddress)}
			{foreach from=$arrAddress item=valAddr}
			<div class="row">
				<div class="col-md-12" >
					<div class="div-address-info">
						<button type="button" class="btn btn-xs btn-info btn-edit-address" data-addressid="{$valAddr['id_address']}" title="edit address"><i class="fas fa-pencil-alt"></i></button>
						<div class="row">
							<div class="col-md-1 col-xs-1" style="text-align: center; vertical-align: middle;text-align: center;vertical-align: middle; padding-right: 0px;">
								<div class="radio">
									<label><input type="radio" name="billing_address" class="opt-billing-addr" value="{$valAddr['id_address']}"></label>
								</div>
							</div>
							<div class="col-md-8 col-xs-8 address-details">
								<b>{$valAddr['alias']}</b></font>
								<br/>
								{$valAddr['firstname']} {{$valAddr['lastname']}}<br/>
								<p>
									{$valAddr['address1']},
									{if $valAddr['address2'] != ''}{$valAddr['address2']},{/if} 
								<br/>
								{$valAddr['postcode']} {$valAddr['city']},{$valAddr['statename']}, Malaysia<br>
								</p>
								<p style="margin-top:7px;">{$valAddr['phone_mobile']}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			{/foreach}
		{/if}
	</div>
</div>
-->