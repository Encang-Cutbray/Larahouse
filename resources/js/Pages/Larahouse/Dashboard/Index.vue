<template>
	<larahouse-layout>
		<div class="ui grid stackable padded">
			<div
				class="four wide computer eight wide tablet sixteen wide mobile column"
			>
				<div class="ui fluid card">
					<div class="content">
						<div class="ui placeholder segment">
							<div class="ui icon header">
								<i class="pdf file outline icon"></i>
								No documents are listed for this customer.
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
							Elliot requested permission to view your contact
							details
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
							Elliot requested permission to view your contact
							details
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
	</larahouse-layout>
</template>

<script>
import LarahouseLayout from "@/Layouts/LarahouseLayout";

export default {
	components: {
		LarahouseLayout
	}
};
</script>

<style></style>
