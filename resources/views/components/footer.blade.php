

<div class="container-fluid bg-white pt-4">
		<div class="row justify-content-evenly">
			<div class="col-lg-4 px-3">
				<h5 class="h-font fw-bold mt-3 text-center">Bracu Tickets</h5>
				<p class="mt-2 text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>

			<div class="col-lg-4 text-center">
				<h5>Links</h5>
				<a href="index.php"class="d-inline-block text-decoration-none text-dark m-2">Home</a><br>
				<a href="rooms.php"class="d-inline-block text-decoration-none text-dark m-2">Transports</a><br>
				<a href="facilities.php"class="d-inline-block text-decoration-none text-dark m-2">Facilities</a><br>
				<a href="contact.php"class="d-inline-block text-decoration-none text-dark m-2">Contact us</a><br>
				<a href="about.php"class="d-inline-block text-decoration-none text-dark m-2">About</a><br>
			</div>
			<div class="col-lg-4">
				<h5 class="my-4">Follow Us</h5>

				<a class="text-decoration-none text-dark mx-3" href="https://www.facebook.com/">
					<span>
						<i class="bi bi-facebook"></i>
						Facebook
					</span>
				</a>
				<a class="text-decoration-none text-dark d-inline-block" href="https://twitter.com/">
					<span>
						<i class="bi bi-twitter"></i>
						Twitter
					</span>
				</a>

			</div>


		</div>

	</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>	

<!-- Data tables -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script >
	$(document).ready( function () {
		$('.table').DataTable();
	} );
</script>

<!-- js for swiper (from swiper js) -->
<script>
    var swiper = new Swiper(".mySwiper", {
        cssMode: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
        },
        mousewheel: true,
        keyboard: true,
        loop:true,
        autoplay:{
            delay:2500,
            disalbeOnInteraction: false,
        }
    });
</script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

</script>

</body>
</html>