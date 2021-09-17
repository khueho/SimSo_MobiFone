document.write('<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.13.3/sweetalert2.min.js" ></script>');
document.write('<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.13.3/sweetalert2.min.css">')

jQuery(document).ready(function($){
	$('.btn_active_fs').click(function(){
		Swal.fire({
		    title: 'Kích hoạt Theme Flatsome',
		    text: 'Bạn chắc chắn muốn thực hiện thao tác này',
		    icon: 'warning',
		    showCancelButton: true,
		    confirmButtonColor: '#3085d6',
		    cancelButtonColor: '#d33',
		    confirmButtonText: 'Kích hoạt'
		}).then((result) => {
		    if (result.isConfirmed) {
		    	$.ajax({
					url : pk.url,
					type : 'post',
					dataType : 'json',
					data : {
						action : "check_active_theme_fs"
					},
					success(res){
						console.log(res)
						if(res.data.status) {
							Swal.fire({
								icon: 'success',
								title: res.data.message,
								showConfirmButton: true,
								timer: 5000
							})

							setTimeout(function(){
								window.location.reload()
							}, 5000);
						} else {
							Swal.fire({
								icon: 'error',
								title: 'Oops...',
								text: 'Đã có lỗi xảy ra!'
							})
						}
					},
					catch(e) {
						Swal.fire({
							icon: 'error',
							title: 'Oops...',
							text: 'Đã có lỗi xảy ra!'
						})
						console.log(e)
					}
				})
		    }
		})
	})
})