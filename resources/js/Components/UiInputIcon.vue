<template>
	<div class="field">
		<div
			:class="[
				'ui',
				disabled ? 'disabled' : null,
				sizeInput,
				iconPosition,
				'icon',
				'input'
			]"
		>
			<i class="icon" :class="icon"></i>
			<input
				:type="type"
				:id="id"
				:name="name"
				:placeholder="placeholder"
				:class="{ is__error: isError }"
				v-bind:value="value"
				v-on:input="$emit('input', $event.target.value)"
			/>
		</div>
	</div>
</template>

<script>
export default {
	props: {
		disabled: {
			/**
			 * note: simatic ui class
			 * type: false, true
			 */
			type: Boolean,
			default: function() {
				return false;
			}
		},
		sizeInput: {
			/**
			 * note: simatic ui class
			 * type: 'mini', 'small' , 'big'
			 */
			type: String,
			default: function() {
				return "small";
			}
		},

		iconPosition: {
			/**
			 * note: simatic ui class
			 * type: 'left', 'right'
			 */
			type: String,
			default: function() {
				return "left";
			}
		},
		icon: {
			/**
			 * note: simatic ui icon
			 * link: https://semantic-ui.com/elements/icon.html
			 */
			type: String,
			default: function() {
				return "envelope";
			}
		},
		isError: {
			/**
			 * note: Custome error class
			 * type: false, true
			 */
			type: Boolean,
			default: function() {
				return false;
			}
		},
		type: {
			/**
			 * note: type input
			 * type: 'text', 'number', 'password
			 */
			type: String,
			default: function() {
				return "text";
			}
		},
		id: {
			/**
			 * note: id attribute input
			 */
			type: String,
			required: true
		},

		name: {
			/**
			 * note: name attribute input
			 */
			type: String,
			required: true
		},
		placeholder: {
			/**
			 * note: placeholder attribute input
			 */
			type: String,
			default: function() {
				return null;
			}
		},
		value: {
			/**
			 * note: value attribute input by v-model
			 */
			type: String || Array,
			default: function() {
				return null;
			}
		}
	}
};
</script>

<style>
.is__error {
	border-color: #d8000c !important;
}
</style>
