<template>
	<section>
		<h2>Lista tutti post</h2>
		<ul>
			<li v-for="post in posts" :key="post.id">{{post.title}}</li>
		</ul>
	</section>
</template>

<script>
	export default {
		name: 'Posts',
		data() {
			return {
				posts: []
			}
		},
		mounted() {
			axios.get('/api/posts')
			.then((response) => {
				// handle success
				this.posts = response.data.data;
			})
			.catch( (error) => {
				// handle error
				console.log(error);
			})
		}
	}
</script>