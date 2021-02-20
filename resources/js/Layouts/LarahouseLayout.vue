<template>
	<div>
		<larahouse-sidenav></larahouse-sidenav>
		<larahouse-topnav></larahouse-topnav>
		<div class="pusher">
			<div class="main-content">
				<slot></slot>
			</div>
		</div>
	</div>
</template>

<script>
import LarahouseSidenav from "@/Layouts/LarahouseSidenav";
import LarahouseTopnav from "@/Layouts/LarahouseTopnav";

export default {
	components: {
		LarahouseSidenav,
		LarahouseTopnav
	},
	mounted() {
		$(".ui.dropdown").dropdown();
		$(".sidebar-menu-toggler").on("click", function() {
			var target = $(this).data("target");
			$(target)
				.sidebar({
					dinPage: true,
					transition: "overlay",
					mobileTransition: "overlay"
				})
				.sidebar("toggle");
		});
	}
};
</script>
