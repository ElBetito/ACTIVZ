<template>
	<div>
		<div class="row justify-content-center">
			<div class="col">
				<el-carousel :interval="5000" arrow="always" height="450px">
					<el-carousel-item>
						<img src="/images/carousel.png" width="100%" height="100%">
					</el-carousel-item>
				</el-carousel>
			</div>
		</div>
	</div>
</template>
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