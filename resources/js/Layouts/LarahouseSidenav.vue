<template>
	<div class="ui sidebar inverted vertical menu sidebar-menu" id="sidebar">
		<div class="item">
			<div class="header">General</div>
			<div class="menu">
				<a class="item">
					<div>
						<i class="icon tachometer alternate"></i>
						Dashboard
					</div>
				</a>
			</div>
		</div>
		<div class="item">
			<div class="header">
				Administration
			</div>
			<div class="menu">
				<a class="item">
					<div><i class="cogs icon"></i>Settings</div>
				</a>
				<a class="item">
					<div><i class="users icon"></i>Team</div>
				</a>
			</div>
		</div>

		<a href="#" class="item">
			<div>
				<i class="icon chart line"></i>
				Charts
			</div>
		</a>

		<a class="item" v-for="n in 10" :key="n">
			<div>
				<i class="icon lightbulb"></i>
				Apps {{n}}
			</div>
		</a>

		<div class="item" v-for="k in 10" :key="k">
			<div class="header">Other {{k}}</div>
			<div class="menu">
				<a href="#" class="item">
					<div>
						<i class="icon envelope"></i>
						Messages
					</div>
				</a>

				<a href="#" class="item" v-for="z in 3" :key="z">
					<div>
						<i class="icon calendar alternate"></i>
						Calendar {{z}}
					</div>
				</a>
			</div>
		</div>

		<div class="item">
			<form action="#">
				<div class="ui mini action input">
					<input type="text" placeholder="Search..." />
					<button class="ui mini icon button">
						<i class=" search icon"></i>
					</button>
				</div>
			</form>
		</div>
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
export default {};
</script>

