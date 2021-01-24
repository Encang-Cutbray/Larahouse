<template>
	<auth-layout>
		<div class="ui middle aligned center aligned grid">
			<div class="column">
				<h2 class="ui orange image header">
					<div class="content">
						Login to your account
					</div>
				</h2>
				<form class="ui large form">
					<div class="ui stacked segment">
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
						<div class="ui fluid large orange submit button">
							Login
						</div>
					</div>

					<div class="ui error message"></div>
				</form>

				<div class="ui message">
					New to us? <inertia-link :href="registration">Registration</inertia-link>
				</div>
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
		registration: String
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
