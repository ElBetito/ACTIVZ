<template>
	<div>
		<div class="row justify-content-center">
			<div class="col">
				<el-carousel :interval="3000" arrow="always" height="650px">
					<el-carousel-item v-for="(corousel, key) in corousels" :key="key">
						<img :src="corousel.path" width="100%" height="100%">
					</el-carousel-item>
				</el-carousel>
			</div>
		</div>
	</div>
</template>

<script>
	export default {
		data() {
			return {
				corousels: ''
			}
		},
		mounted() {
			this.getCarousel();
		},
		methods: {
			getCarousel() {
				axios.get('/api/data-carousel')
				.then(response => {
						if(response.data.code === 200) {
							this.corousels = response.data.lResult;
						}
					})
					.catch(error => console.log(error))
			}
		},
	}
</script>

<style scope>
	.el-carousel__item h3 {
		color: #475669;
		font-size: 18px;
		opacity: 0.75;
		line-height: 300px;
		margin: 0;
	}

	.el-carousel__item:nth-child(2n) {
		background-color: #99a9bf;
	}

	.el-carousel__item:nth-child(2n+1) {
		background-color: #d3dce6;
	}
</style>