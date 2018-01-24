<template>
	<div class="onboarding">
		<div class="level">
			<div class="level-left">
				<h1 class="title level-item">Welcome to SourceAcademy 🎉</h1>
			</div>
			<div class="level-right">
				<breadcrumbs>
					<breadcrumbs-item href="/signup/details" active>Details</breadcrumbs-item>
				</breadcrumbs>
			</div>
		</div>
		<section id="details" v-show="activeSectionIs('details')">

			<h2 class="subtitle">Before we get started - just a few quick details.</h2>
			
		</section>

		<section id="password" v-show="activeSectionIs('password')">

			<h2 class="subtitle">Great, now let's finish creating your account.</h2>
			<p class="description">All we need is a password. Choose something memorable!</p>

			<div class="field">
				<label class="label">Password:</label>
				<div class="control">
					<input class="input" type="password" placeholder="********" v-model="password" autofocus>
				</div>
				<p class="help" v-if="false">This is a help text</p>
			</div>
			<div class="field">
				<label class="label">Confirm password:</label>
				<div class="control">
					<input class="input" type="password" placeholder="********" v-model="password_confirmation">
				</div>
				<p class="help is-danger" v-if="this.errors.password_confirmation">This is a help text</p>
			</div>

			<button class="button is-primary" title="I have entered my password twice." @click="submit('password')">Good to go 🔑</button>
		</section>
		<section id="project" v-show="activeSectionIs('project')">

			<feedback class="is-success" content="Your account has been created." call-to-action="Well done you.">
				<feedback-option slot="feedback-options" icon="😄" title="Happy"></feedback-option>
				<feedback-option slot="feedback-options" icon="❌" title="Close"></feedback-option>
			</feedback>

			<p class="description">It seems you are looking for help with a {{ projectType }}.</p>

			<div class="field">
				<label class="label">What do you want to call this project?</label>
				<div class="control">
					<input class="input" type="text" placeholder="SourceAcademy.co" v-model="projectName" autofocus>
				</div>
				<p class="help is-danger" v-if="this.errors.projectName">This is a help text</p>
			</div>

			<button class="button is-primary" title="Let's get started." @click="submit('project')">Let's get started 📈</button>
		</section>
	</div>
</template>

<style lang="scss">
.onboarding {
	& .description {
		margin-bottom: 1rem;
	}

	& .button {
		margin-top: 1rem;
	}
}
</style>

<script>
export default {
	data() {
		return {
			sections: [
			{
				name: 'details',
				completed: false
			},
			{
				name: 'password',
				completed: false
			},
			{
				name: 'project',
				completed: false
			}
			],
			activeSection: 0,
			errors: {
				name: false,
				email: false,
				password: false,
				password_confirmation: false
			}
		}
	},

	props: {
		steps: Object,
		name: String,
		email: String,
		projectType: String,
		projectName: String
	},

	methods: {
		activeSectionIs(section) {
			if (this.activeSection == this.findSection(section)) { return true };
			return false;
		},

		findSection(section) {
			return this.sections.findIndex(each => each.name == section);
		},

		goToSection(section) {
			if (this.previousSectionCompleted(section)) {
				this.activeSection = this.findSection(section);
			};
		},

		previousSection() {
			this.activeSection --;
		},

		nextSection() {
			this.activeSection ++;
		},

		submit(section) {
			this.validate();
			this.completeSection(section);
			this.nextSection();
		},

		completeSection(section) {
			this.sections[this.findSection(section)].completed = true;
		},

		previousSectionCompleted(section) {
			if (this.findSection(section) == 0 || this.sections[this.findSection(section) - 1].completed) {
				return true;
			}
			return false;
		},

		validate() {
			return true;
		}
	}
}
</script>