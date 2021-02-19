{capture name=path}
<span class="navigation-pipe">{$navigationPipe}</span>
	{l s='Vouchers'  mod='enlineamixmod'}
{/capture}
<link rel="stylesheet" href="/modules/enlineamixmod/views/css/motherhoodchoicevoting.css" type="text/css" media="all" />
<link rel="stylesheet" href="/modules/enlineamixmod/views/css/vouchers.css?ddd=20200326-3" type="text/css" media="all" />
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

    <div class="row">
        {foreach from=$vouchers item=voucher name=myLoop}
            <div class="col-md-6 col-lg-6" style="padding:5px;">
                <div class="mmyslider" data-sliderid="135" data-imagepos="left" data-slidercount="3" data-slidervouchercode="{$voucher.code}"></div>
            </div>
        {/foreach}
    </div>
</div>
<script>
$(document).on('click', '#vouchersButton', function(){
        var codeid = $(this).attr('codeID');
        saveVouchers(codeid);
    });
</script>