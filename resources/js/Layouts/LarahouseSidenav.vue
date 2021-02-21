<template>
	<div class="ui sidebar inverted vertical menu sidebar-menu" id="sidebar">
		<div class="item">
			<form action="#">
				<div class="ui mini action input fluid">
					<input type="text" placeholder="Search..." />
					<button class="ui mini icon button teal">
						<i class=" search icon"></i>
					</button>
				</div>
			</form>
		</div>
		<multi-menu
			v-for="n in 4"
			:key="`multi-menu-${n}`"
			:el-key="n"
			:menu-name="`Menu-${n}`"
		/>
		<single-menu v-for="n in 3" :key="`single-menu-${n}`" />

		<div class="ui segment inverted">
			<div class="ui tiny olive inverted progress">
				<div class="bar" style="width: 54%"></div>
				<div class="label">Monthly Bandwidth</div>
			</div>

			<div class="ui tiny teal inverted progress">
				<div class="bar" style="width:78%"></div>
				<div class="label">Disk Usage</div>
			</div>
		</div>
	</div>
</template>

<script>
import MultiMenu from "@/Components/SideMenu/MultiMenu";
import SingleMenu from "@/Components/SideMenu/SingleMenu";

export default {
	components: {
		MultiMenu,
		SingleMenu
	}
};
</script>
