<template>
	<auth-layout>
		<div class="ui middle aligned center aligned grid">
			<div class="column">
				<h2 class="ui red image header">
					<div class="content">
						Registration new account
					</div>
				</h2>
				<form class="ui large form" autocomplete="off">
					<div class="ui stacked segment">
						<ui-input-icon
							name="fullname"
							id="fullname"
							icon="user"
							:disabled="isLoading"
							placeholder="Fullname"
							v-model="registrationForm.name"
						/>
						<ui-input-icon
							name="email"
							type="email"
							id="email"
							icon="envelope"
							:disabled="isLoading"
							placeholder="Email"
							v-model="registrationForm.email"
						/>
						<ui-input-icon
							name="password"
							type="password"
							id="password"
							icon="lock"
							:disabled="isLoading"
							placeholder="password"
							v-model="registrationForm.password"
						/>
						<ui-button-fluid
							button-color="red"
							@btnClick="handleRegistration"
							button-name="Registration"
							:disabled="isLoading"
						/>
					</div>

					<div class="ui error message"></div>
				</form>

				<div class="ui message" v-if="!isLoading">
					Login?
					<inertia-link :href="urlLogin">Login</inertia-link>
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
		urlLogin: String,
		urlRegistrationPost: String
	},
	data() {
		return {
			isLoading: false,
			registrationForm: {
				name: "Encang Cutbray",
				email: "encang@cutbray.com",
				password: "secret"
			}
		};
	},
	methods: {
		async handleRegistration() {
			try {
				this.isLoading = !this.isLoading;
				const result = await axios.post(
					this.urlRegistrationPost,
					this.registrationForm
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
