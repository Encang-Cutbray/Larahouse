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
									v-model="registrationForm.fullname"
									type="text"
									:disabled="isLoading"
									placeholder="Fullname"
								/>
							</div>
						</div>
						<div class="field">
							<div class="ui left icon input">
								<i class="envelope icon"></i>
								<input
									type="text"
									:disabled="isLoading"
									v-model="registrationForm.email"
									placeholder="E-mail address"
								/>
							</div>
						</div>
						<div class="field">
							<div class="ui left icon input">
								<i class="lock icon"></i>
								<input
									type="password"
									:disabled="isLoading"
									v-model="registrationForm.password"
									placeholder="Password"
								/>
							</div>
						</div>
						<div
							class="ui fluid large red submit button"
							:class="{ disabled: isLoading }"
							@click="handleRegistration"
						>
							Registration
						</div>
					</div>

					<div class="ui error message"></div>
				</form>

				<div class="ui message" v-if="!isLoading">
					Login?
					<inertia-link :href="login">Login</inertia-link>
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
		login: String
	},
	data() {
		return {
			isLoading: false,
			registrationForm: {
				fullname: 'Encang Cutbray',
				email: 'encang@cutbray.com',
				password: 'secret'
			}
		};
	},
	methods: {
		handleRegistration() {
			this.isLoading = !this.isLoading;
			axios.post("/registration", this.registrationForm).then(res => {
				console.log(res.data);
				this.isLoading = !this.isLoading;
			}).catch(error => {
				this.isLoading = !this.isLoading
				console.log(error.response);
			});
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
