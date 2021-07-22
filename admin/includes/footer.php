<!-- =======  start footer===== -->
<footer class="d-print-none" style="border-top:1px solid #d9083c;">
	
<div class="text-white" style="background-color: #0b0b0c">
	<div class="container " >
		<div class="row pt-4">
			<div class="col-sm-8 text-center ">
				<i><p style="color:gray">Copyright &copy; 2021 RanchiWebCooking
					Ranchi, Jharkhand, India.
					All rights reserved.
				</p></i>
			</div>
			<div class="col-sm-4">
				<p style="color:gray"> Developed by: <a href="#" style="color: #d9083c">AT Designers</a></p>
			</div>
		</div>
	</div>
</div>
</footer>

<!-- ======= end footer ======= -->


<!-- ===== bootstrap cdn link ===== -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/all.min.js"></script>
<!-- ====== aos animation ============== -->
<!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init();
</script> -->
<!-- ===sweet alert cdn=== -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- ===sweet alert code=== -->
<?php
if (isset($_SESSION['status']) && $_SESSION['status'] !='') {
?>
<script>
swal({
title: "<?php echo $_SESSION['status'] ?>",
text: "<?php echo $_SESSION['status_txt'] ?>",
icon: "<?php echo $_SESSION['status_code'] ?>",
});
</script>
<?php
unset($_SESSION['status']);
}
?>
<!-- ============ lightbox=============== -->
<script src="../js/lightbox-plus-jquery.min.js"></script>
<!-- ==========start swiper.js ========== -->
<!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script> -->
<!-- var swiper = new Swiper('.swiper-container', {
effect: 'coverflow',
grabCursor: true,
centeredSlides: true,
slidesPerView: 'auto',
coverflowEffect: {
rotate: 50,
stretch: 0,
depth: 100,
modifier: 1,
slideShadows: true,
},
pagination: {
el: '.swiper-pagination',
},
loop:true,
zoom: true,
autoplay: {
delay: 1400,
disableOnInteraction: false,
}
});
</script> -->
<!-- ========== end swiper.jl========= -->


</body>
</html>