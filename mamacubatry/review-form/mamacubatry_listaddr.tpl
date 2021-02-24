<div class="row delivery-address">
	{if !empty($arrAddress)}
		{foreach from=$arrAddress item=valAddr}
			<div class="col-md-6" >
				<div class="div-address-info">
					<button type="button" class="btn btn-xs btn-info btn-edit-address" data-addressid="{$valAddr['id_address']}"><i class="fas fa-pencil-alt"></i></button>
					<div class="row">
						<div class="col-md-2 col-xs-2" style="text-align: center; vertical-align: middle;">
							<div class="radio">
								<label><input type="radio" name="optradio" value="{$valAddr['id_address']}"></label>
							</div>
						</div>
						<div class="col-md-8 col-xs-8">
							<p><b>{$valAddr['alias']}</b></p>
							<p>{$valAddr['firstname']} {{$valAddr['lastname']}}</p>
							<p>{$valAddr['address1']},</p>
							{if $valAddr['address2'] != ''}<p>{$valAddr['address2']},</p>{/if} 
							<p>{$valAddr['postcode']} {$valAddr['city']},</p> 
							<p>{$valAddr['statename']}, Malaysia</p>
							<p>{$valAddr['phone_mobile']}</p>
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
<div class="row">
	<div class="col-md-12" style="padding-left: 15px; padding-right: 15px;">
		<div style="margin-top: 10px; margin-bottom: 10px;">
			<div class="checkbox">
				<label><input type="checkbox" value="yes" class="check-billing-addr" name="same_address_delivery">Billing address same as delivery address</label>
			</div>
		</div>
	</div>
</div>
<div class="row billing-address" style=" padding-left: 15px; padding-right: 15px;">
	<div class="row">
		{if !empty($arrAddress)}
			{foreach from=$arrAddress item=valAddr}
				<div class="col-md-6" >
					<div class="div-address-info">
						<button type="button" class="btn btn-xs btn-info btn-edit-address" data-addressid="{$valAddr['id_address']}"><i class="fas fa-pencil-alt"></i></button>
						<div class="row">
							<div class="col-md-2 col-xs-2" style="text-align: center; vertical-align: middle;">
								<div class="radio">
									<label><input type="radio" name="optradio" value="{$valAddr['id_address']}"></label>
								</div>
							</div>
							<div class="col-md-8 col-xs-8">
								<p><b>{$valAddr['alias']}</b></p>
								<p>{$valAddr['firstname']} {{$valAddr['lastname']}}</p>
								<p>{$valAddr['address1']},</p>
								{if $valAddr['address2'] != ''}<p>{$valAddr['address2']},</p>{/if} 
								<p>{$valAddr['postcode']} {$valAddr['city']},</p> 
								<p>{$valAddr['statename']}, Malaysia</p>
								<p>{$valAddr['phone_mobile']}</p>
							</div>
						</div>
					</div>
				</div>
			{/foreach}
		{/if}
	</div>
</div>