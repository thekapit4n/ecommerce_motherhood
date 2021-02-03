{*
/**
 * StorePrestaModules SPM LLC.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 *
 /*
 * 
 * @author    StorePrestaModules SPM
 * @category seo
 * @package ratingsnippets
 * @copyright Copyright StorePrestaModules SPM
 * @license   StorePrestaModules SPM
 */
*}

{if $ratingsnippetsrvis_on == 1}
{if $logged == 0 AND $onllog == 1}
		{$result|escape:'quotes':'UTF-8'}
{else}
		{$rating|escape:'quotes':'UTF-8'}
{/if}
{/if}

{$ratingsnippetsextrarightsnippet|escape:'quotes':'UTF-8'}


{if $ratingsnippetspinvis_on == 1 && $ratingsnippets_extraRight == 'extraRight'}
<a href="//www.pinterest.com/pin/create/button/?
		url=http://{$smarty.server.HTTP_HOST|escape:'htmlall':'UTF-8'}{$smarty.server.REQUEST_URI|escape:'htmlall':'UTF-8'}
		&media={$product_image|escape:'htmlall':'UTF-8'}
		&description={$meta_description|escape:'htmlall':'UTF-8'}" 
  data-pin-do="buttonPin" data-pin-config="{if $ratingsnippetspinterestbuttons == 'firston'}above{/if}{if $ratingsnippetspinterestbuttons == 'secondon'}beside{/if}{if $ratingsnippetspinterestbuttons == 'threeon'}none{/if}">
  <img src="//assets.pinterest.com/images/pidgets/pin_it_button.png" />
</a>
{/if}