<template>
	<div>
		<!-- sidebar -->
		<div
			class="ui sidebar inverted vertical menu sidebar-menu"
			id="sidebar"
		>
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

			<a class="item">
				<div>
					<i class="icon lightbulb"></i>
					Apps
				</div>
			</a>
			<div class="item">
				<div class="header">Other</div>
				<div class="menu">
					<a href="#" class="item">
						<div>
							<i class="icon envelope"></i>
							Messages
						</div>
					</a>

					<a href="#" class="item">
						<div>
							<i class="icon calendar alternate"></i>
							Calendar
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
		<!-- sidebar -->

		<!-- top nav -->
		<nav class="ui top fixed inverted menu">
			<div class="left menu">
				<a
					href="#"
					class="sidebar-menu-toggler item"
					data-target="#sidebar"
				>
					<i class="sidebar icon"></i>
				</a>
				<a href="#" class="header item">
					Semantic UI
				</a>
			</div>

			<div class="right menu">
				<a href="#" class="item">
					<i class="bell icon"></i>
				</a>
				<div class="ui dropdown item">
					<i class="user cirlce icon"></i>
					<div class="menu">
						<a href="#" class="item">
							<i class="info circle icon"></i> Profile</a
						>
						<a href="#" class="item">
							<i class="wrench icon"></i>
							Settings</a
						>
						<a href="#" class="item">
							<i class="sign-out icon"></i>
							Logout
						</a>
					</div>
				</div>
			</div>
		</nav>
		<!-- top nav -->

		<!-- content -->
		<div class="pusher">
			<div class="main-content">
				<div class="ui grid stackable padded">
					<div
						class="four wide computer eight wide tablet sixteen wide mobile column"
					>
						<div class="ui fluid card">
							<div class="content">
								<div class="ui placeholder segment">
									<div class="ui icon header">
										<i class="pdf file outline icon"></i>
										No documents are listed for this
										customer.
									</div>
									<div class="ui primary button">
										Add Document
									</div>
								</div>
							</div>
							<div class="extra content">
								<div class="ui two buttons">
									<div class="ui red button">More Info</div>
								</div>
							</div>
						</div>
					</div>
					<div
						class="four wide computer eight wide tablet sixteen wide mobile column"
					>
						<div class="ui fluid card">
							<div class="content">
								<form class="ui form">
									<div class="field">
										<label>First Name</label>
										<input
											type="text"
											name="first-name"
											placeholder="First Name"
										/>
									</div>
									<div class="field">
										<label>Last Name</label>
										<input
											type="text"
											name="last-name"
											placeholder="Last Name"
										/>
									</div>
									<div class="field">
										<div class="ui checkbox">
											<input
												type="checkbox"
												tabindex="0"
												class="hidden"
											/>
											<label
												>I agree to the Terms and
												Conditions</label
											>
										</div>
									</div>
									<button class="ui button" type="submit">
										Submit
									</button>
								</form>
							</div>
							<div class="extra content">
								<div class="ui two buttons">
									<div class="ui green button">More Info</div>
								</div>
							</div>
						</div>
					</div>
					<div
						class="four wide computer eight wide tablet sixteen wide mobile column"
					>
						<div class="ui fluid card">
							<div class="content">
								<div class="ui right floated header teal">
									<i class="icon briefcase"></i>
								</div>
								<div class="header">
									<div class="ui teal header">3112</div>
								</div>
								<div class="meta">
									Saves
								</div>
								<div class="description">
									Elliot requested permission to view your
									contact details
								</div>
							</div>
							<div class="extra content">
								<div class="ui two buttons">
									<div class="ui teal button">More Info</div>
								</div>
							</div>
						</div>
					</div>
					<div
						class="four wide computer eight wide tablet sixteen wide mobile column"
					>
						<div class="ui fluid card">
							<div class="content">
								<div class="ui right floated header purple">
									<i class="icon trophy"></i>
								</div>
								<div class="header">
									<div class="ui purple header">9805</div>
								</div>
								<div class="meta">
									Views
								</div>
								<div class="description">
									Elliot requested permission to view your
									contact details
								</div>
							</div>
							<div class="extra content">
								<div class="ui two buttons">
									<div class="ui purple button">
										More Info
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="ui grid stackable padded">
					<div class="column">
						<table class="ui celled striped table">
							<thead>
								<tr>
									<th colspan="3">
										Git Repository
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="collapsing">
										<i class="folder icon"></i> node_modules
									</td>
									<td>Initial commit</td>
									<td class="right aligned collapsing">
										10 hours ago
									</td>
								</tr>
								<tr>
									<td><i class="folder icon"></i> test</td>
									<td>Initial commit</td>
									<td class="right aligned">10 hours ago</td>
								</tr>
								<tr>
									<td><i class="folder icon"></i> build</td>
									<td>Initial commit</td>
									<td class="right aligned">10 hours ago</td>
								</tr>
								<tr>
									<td>
										<i class="file outline icon"></i>
										package.json
									</td>
									<td>Initial commit</td>
									<td class="right aligned">10 hours ago</td>
								</tr>
								<tr>
									<td>
										<i class="file outline icon"></i>
										Gruntfile.js
									</td>
									<td>Initial commit</td>
									<td class="right aligned">10 hours ago</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="ui grid stackable padded">
					<div
						class="four wide computer eight wide tablet sixteen wide mobile  center aligned column"
					>
						<div class="ui teal statistic">
							<div class="value">
								5,550
							</div>
							<div class="label">
								Downloads
							</div>
						</div>
					</div>
					<div
						class="four wide computer eight wide tablet sixteen wide mobile  center aligned column"
					>
						<div class="ui purple statistic">
							<div class="value">
								50+
							</div>
							<div class="label">
								Developers
							</div>
						</div>
					</div>
					<div
						class="four wide computer eight wide tablet sixteen wide mobile  center aligned column"
					>
						<div class="ui green statistic">
							<div class="value">
								800+
							</div>
							<div class="label">
								Commits
							</div>
						</div>
					</div>
					<div
						class="four wide computer eight wide tablet sixteen wide mobile  center aligned column"
					>
						<div class="ui purple statistic">
							<div class="value">
								1000+
							</div>
							<div class="label">
								Cups of Coffee
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- content -->
	</div>
</template>

<script>
export default {
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

<style></style>
