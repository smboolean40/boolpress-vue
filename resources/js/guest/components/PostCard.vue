<template>
	<div class="post">
		<h3>{{data.title}}</h3>
		<p class="post__content">{{data.content}}</p>
		<p><a href="#">Scopri di più</a></p>
	</div>
</template>

<script>
	export default {
		name: 'PostCard',
		props: {
			data: Object
		}
	}
</script>

<style lang="scss" scoped>
	.post {
		background-color: #444;
		border-radius: 10px;
		padding: 10px;

		&__content {
			margin-bottom: .625rem;
		}
	}
	h3 {
		margin-bottom: .625rem;
		text-transform: uppercase;
	}
</style>