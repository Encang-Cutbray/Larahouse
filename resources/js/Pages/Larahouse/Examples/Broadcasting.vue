<template>
	<div>KOPIO</div>
</template>

<script>
export default {
	mounted() {
		console.log(this.getNotification());
		this.getNotification();
	},
	methods: {
		getNotification() {
			Echo.channel("home").listen(".NewMessage", e => {
				console.log(e);
			});
		}
	}
};
</script>

<style></style>
