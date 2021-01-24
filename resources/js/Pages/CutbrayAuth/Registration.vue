<template>
	<auth-layout>
		<div class="ui middle aligned center aligned grid">
			<div class="column">
				<h2 class="ui red image header">
					<div class="content">
						Registration new account
					</div>
				</h2>
				<form class="ui large form">
					<div class="ui stacked segment">
						<div class="field">
							<div class="ui left icon input">
								<i class="user icon"></i>
								<input
									type="text"
									name="fullname"
									placeholder="Fullname"
								/>
							</div>
						</div>
						<div class="field">
							<div class="ui left icon input">
								<i class="envelope icon"></i>
								<input
									type="text"
									name="email"
									placeholder="E-mail address"
								/>
							</div>
						</div>
						<div class="field">
							<div class="ui left icon input">
								<i class="lock icon"></i>
								<input
									type="password"
									name="password"
									placeholder="Password"
								/>
							</div>
						</div>
						<div class="ui fluid large red submit button">
							Registration
						</div>
					</div>

					<div class="ui error message"></div>
				</form>

				<div class="ui message">Login? <inertia-link :href="login" :class="orange">Login</inertia-link></div>
			</div>
		</div>
	</auth-layout>
</template>

<script>
import AuthLayout from "@/Layouts/AuthLayout";

export default {
	components: {
		AuthLayout
	},
	props: {
		login: String
	},
	data() {
		return {
			loginForm: {
				email: null,
				password: null
			}
		};
	}
};
</script>

<style>
div.ui.grid {
	margin-top: 0;
}
.column {
	max-width: 450px;
}
</style>
