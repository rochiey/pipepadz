<a href="javascript:void(0)" onclick="refundEntry(this)" data-route="{{ url($crud->route.'/'.$entry->getKey()) }}" class="btn btn-sm btn-link" data-button-type="refund"><i class="la la-history"></i> {{ trans('Refund') }}</a>

@push('after_scripts') @if (request()->ajax()) @endpush @endif
<script>

if (typeof refundEntry != 'function') {
	  $("[data-button-type=refund]").unbind('click');

	function refundEntry(button) {
		var button = $(button);
		var route = button.attr('data-route');
		var row = $("#crudTable a[data-route='"+route+"']").closest('tr');


		swal({
		  title: "{!! trans('backpack::base.warning') !!}",
		  text: "Are you sure you want to refund this item?",
		  icon: "warning",
		  buttons: {
		  	cancel: {
			  text: "{!! trans('backpack::crud.cancel') !!}",
			  value: null,
			  visible: true,
			  className: "bg-secondary",
			  closeModal: true,
			},
		  	delete: {
			  text: "Yes!",
			  value: true,
			  visible: true,
			  className: "bg-danger",
			}
		  },
		}).then((value) => {
			if (value) {
				$.ajax({
					url: '/refund',
					method: 'POST',
					data: {
						id: '{{ $entry->getKey() }}'
					},
					success: function(data) {
						if (data == 1) {
			          	  // Show a success notification bubble
			              new Noty({
		                    type: "success",
		                    text: "Order has been refunded successfully!"
		                  }).show();

			              // Hide the modal, if any
			              $('.modal').modal('hide');

			              // Remove the details row, if it is open
			              if (row.hasClass("shown")) {
			                  row.next().remove();
			              }

			              // Remove the row from the datatable
			              row.remove();
			          } 
					}
				});
			}
		});

	}
}

</script>
@if (!request()->ajax()) @endpush @endif