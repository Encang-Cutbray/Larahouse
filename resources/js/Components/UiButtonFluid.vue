<template>
	<div
		class="ui fluid large submit button"
		:class="[buttonColor, disabled ? 'disabled': null]"
		@click="$emit('btnClick')"
	>
		<i v-if="buttonIcon" class="icon" :class="buttonIcon"></i>
		{{ buttonName }}
	</div>
</template>

<script>
export default {
	props: {
		// :class="{ disabled: isLoading }"
		buttonName: {
			/**
			 * note: Button name.
			 */
			type: String,
			default: function() {
				return "Submit";
			}
		},
		buttonColor: {
			/**
			 * note: simatic ui class https://semantic-ui.com/usage/theming.html.
			 * type: 'primaryColor', 'secondaryColor', 'red', 'orange', 'yellow', 'olive', 'green', 'teal', 'blue',
			 * 		 'violet', 'purple', 'pink', 'brown', 'grey', 'black'.
			 */
			type: String,
			default: function() {
				return "orange";
			}
		},
		disabled: {
			/**
			 * note: disable button, default false.
			 */
			type: Boolean || String,
			default: function() {
				return false;
			}
		},
		buttonIcon: {
			/**
			 * note: simatic ui icon.
			 * link: https://semantic-ui.com/elements/icon.html.
			 */
			type: String,
			default: function() {
				return null;
			}
		}
	}
};
</script>

<style></style>
