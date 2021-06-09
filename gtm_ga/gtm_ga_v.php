<button type="button" class="btn btn-primary btn-gtm"> tag gtm/ga</button>


<script>
$( document ).ready(function() {
	
	$('body').on('click', '.btn-gtm', function(){
		console.log("click");
		window.dataLayer = window.dataLayer || [];
		window.dataLayer.push({
			'event': 'newOrder',
			'reference': 'testing_reference_from_event_page',
			'amount': '100.00',
			'transactionProducts':[
				{
					'productId': 'testproduct1',
					'productQty': '1',
					'productPrice': '50'
				},
				{
					'productId': 'testproduct2',
					'productQty': '2',
					'productPrice': '25'
				},	
			]
		});
	});
	
});
</script>