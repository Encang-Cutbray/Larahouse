<template>
	<auth-layout>
		<div class="ui middle aligned center aligned grid">
			<div class="column">
				<h2 class="ui orange image header">
					<div class="content">
						Login to your account
					</div>
				</h2>
				<form class="ui large form" autocomplete="off">
					<div class="ui stacked segment">
						<ui-input-icon
							name="email"
							id="email"
							icon="envelope"
							placeholder="Email"
							:disabled="isLoading"
							v-model="loginForm.email"
						/>
						<ui-input-icon
							type="password"
							name="password"
							id="password"
							icon="lock"
							placeholder="Password"
							:disabled="isLoading"
							v-model="loginForm.password"
						/>
						<ui-button-fluid
							@btnClick="handleLogin"
							:disabled="isLoading"
							button-name="Login"
						/>
					</div>
				</form>

				<div class="ui message">
					New to us?
					<inertia-link :href="urlRegistration"
						>Registration</inertia-link
					>
				</div>
			</div>
		</div>
	</auth-layout>
</template>

<script>
import AuthLayout from "@/Layouts/AuthLayout";
import UiInputIcon from "@/Components/UiInputIcon";
import UiButtonFluid from "@/Components/UiButtonFluid";

export default {
	components: {
		AuthLayout,
		UiInputIcon,
		UiButtonFluid
	},
	props: {
		urlRegistration: String,
		urlLoginPost: String
	},
	data() {
		return {
			isLoading: false,
			loginForm: {
				email: "encang@cutbray.com",
				password: "secret"
			}
		};
	},
	methods: {
		async handleLogin() {
			try {
				this.isLoading = !this.isLoading;
				const result = await axios.post(
					this.urlLoginPost,
					this.loginForm
				);
				console.log(result.data);
				this.isLoading = !this.isLoading;
			} catch (error) {
				this.isLoading = !this.isLoading;
				console.log(error.response);
			}
		}
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
