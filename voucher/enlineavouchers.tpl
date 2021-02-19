{capture name=path}
<span class="navigation-pipe">{$navigationPipe}</span>
	{l s='Vouchers'  mod='enlineamixmod'}
{/capture}
<link rel="stylesheet" href="../modules/enlineamixmod/views/css/motherhoodchoicevoting.css" type="text/css" media="all" />
<link rel="stylesheet" href="../modules/enlineamixmod/views/css/vouchers.css" type="text/css" media="all" />
<style>
.nbs-flexisel-item .product-container{
    min-height: 200px;
}

.nbs-flexisel-item .old-price{
   line-height: 30px;
  }

div.product-container div.right-block {
    text-align: center;
}

.nbs-flexisel-item .product-price
{
	font-size: 16px !important;
}

.nbs-flexisel-item .product-title
{
	margin-bottom: 16px;
}

.vouchers_section_products
{
	padding-top: 3px;
}

@media only screen and (max-width: 680px){
	.voucher_seller_name_promotion{
		width:102%;
	}
}

</style>
<!-- MODULE enlineavouchers -->

<h1  class="page-heading">{l s='Vouchers' mod='enlineamixmod'}</h1>
<div class="container">
<div class="row">
    <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/Vouchers/voucher+l.png" alt="Vouchers Banner" width="100%" />
</div>
<div class="clearfix"></div>
    <div class="row vouchersFilter">
    </div>
<div class="clearfix"></div>
    <div class="row vouchersBackground">

    {foreach from=$vouchers item=voucher name=myLoop}
        <div class="col-md-4 vouchersCol">
            <!--vouchers-->
            <div class="col-md-offset-1 col-md-10 vouchers">
                {$voucher.code}
            </div>
            <div class="clearfix"></div>
            <!--vouchersEnd-->
            <div class="col-md-12 vouchersSeller">
            {if $voucher.sellername}
                <a style="color:#289099;" href="{$link->getAgileSellerLink($voucher.sellerid)}" target="_blank">{$voucher.sellername}</a>
            {else if $voucher.sellername == '' && $voucher.brandlink}
                <a style="color:#289099;" href="https://{$smarty.server.HTTP_HOST}/brands/{$voucher.brands}" target="_blank">
                    {$voucher.brands|truncate:30}
                </a>
            {else if $voucher.categorylink}
                {$voucher.category_name|truncate:30}
            {/if}
            </div><!--vouchersSellerEnd-->
            <div class="col-md-12 vouchersDiscount">
                {if $voucher.reduction_percent > 0}
                    {$voucher.reduction_percent} % {l s='discount' mod='enlineamixmod'}
                {/if}
                {if $voucher.reduction_amount > 0}
                    {$voucher.reduction_amount} {$currency} {l s='discount' mod='enlineamixmod'}
                {/if}
                {if $voucher.giftname}
                    {$voucher.giftname|truncate:30}
                {/if}
            </div><!--vouchersDiscountEnd-->
            <div class="vouchersMinSpend">
                {if $voucher.minimum_amount > 0}
                   ( {l s='minimum spend' mod='enlineamixmod'} : {$voucher.minimum_amount} {$currency} )
                {else}
                   ( {l s='No minimum spend' mod='enlineamixmod'} )
                {/if}
            </div><!-- VouchersMinSpendEnd -->
            <div class="vouchersValidTo">
                {if !$voucher.productlink && !$voucher.categorylink && !$voucher.brandlink && !$voucher.giftname}
                    <p>{l s='Apply to: Whole Store' mod='enlineamixmod'}</p>
                {/if}
                {if $voucher.productlink}  
                    {$voucher.productlink}
                {/if}
                {if $voucher.categorylink}
                   {$voucher.categorylink}
                {/if}
                {if $voucher.brandlink}
                    {$voucher.brandlink}
                {/if}
                {if $voucher.giftname}
                <p>{l s='APPLY TO GET FREE GIFT' mod='enlineamixmod'}</p>
                {/if}
            </div><!--vouchersValidTo-->

            <div class="col-md-12 vouchersDate">
                <p>{l s='Valid date' mod='enlineamixmod'}:{$voucher.date_from|date_format:" %d/%m/%Y"} - {$voucher.date_to|date_format:" %d/%m/%Y"}</p>
            </div><!--voucherDiscountEnd-->
            <div class="col-md-12 vouchersButtonCol">
                <div class="vouchersButton btn btn-primary" id="vouchersButton" code="{$voucher.code}" codeID="{$voucher.id_cart_rule}">{l s='REDEEM NOW' mod='enlineamixmod'}</div>
            </div>
        </div><!--vouchersColEnd-->
    {/foreach}
    </div><!--rowEnd-->
</div><!--containerEnd-->{*
<script>
$(document).on('click', '#vouchersButton', function(){
        var code = $(this).attr('code');
        var dummy = $('<input>').val(code).appendTo('body').select();
        document.execCommand('copy');
        alert( "Code Copied :" + code);
    });
</script>*}

<script>
$(document).on('click', '#vouchersButton', function(){
        var codeid = $(this).attr('codeID');
        saveVouchers(codeid);
    });
</script>