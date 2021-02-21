<template>
	<div class="item">
		<div class="header" @click="show">
			{{ menuName }}<i class="dropdown icon"></i>
		</div>
		<div
			:class="[
				`menu`,
				display ? 'show' : 'hidden',
				`transition__key`,
				`transition__key__${elKey}`
			]"
		>
			<a
				v-for="(menuList, index) in menuLists"
				:key="`menuList__${elKey}__${index}`"
				class="item"
				:href="menuList.routeTo"
			>
				<div>
					<i
						class="icon"
						:class="[menuList.routeIcon ? menuList.routeIcon : 'tachometer alternate']"
					></i>
					{{ menuList.routeName }}
				</div>
			</a>
		</div>
	</div>
</template>

<script>
export default {
	data() {
		return {
			display: false
		};
	},
	props: {
		elKey: {
			type: [String, Number],
			require: true
		},
		menuName: {
			type: [String, Number],
			default: function() {
				return "Multi Menu";
			}
		},
		menuLists: {
			type: [Array],
			default: function() {
				return [
					{
						routeIcon: "tachometer alternate",
						routeName: "Sample 1",
						routeTo: "#"
					},
					{
						routeIcon: "lock",
						routeName: "Sample 2",
						routeTo: "#"
					}
				];
			}
		}
	},
	methods: {
		show(e) {
			this.display = !this.display;
			const elDropdown = `.transition__key__${this.elKey}`;
			if (this.display) {
				$(elDropdown).fadeIn(300);
			} else {
				$(elDropdown).fadeOut(100);
			}
		}
	}
};
</script>
<style scoped>
.hidden {
	display: none;
}
.show {
	display: block;
}
</style>
