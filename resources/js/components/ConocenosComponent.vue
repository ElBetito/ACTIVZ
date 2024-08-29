<template>
	<div class="container-product my-5">
		<div class="row">
			<div class="col-md-4 mb-4" v-for="(product, key) in products" :key="key">
				<div class="product-card">
					<div class="image-container">
						<img :src="product.path" class="image" width="250px;" height="250px;">
						<div class="overlay">
							<h5 class="title">{{ product.name }}</h5>
							<button class="btn btn-primary" @click="details(product)">Ver detalles</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	export default {
		data() {
			return {
				products: [],
			}
		},
		mounted() {
			this.getApi();
		},
		methods: {
			details(product) {
				console.log("detalle", product)
				return window.location.href = `/product-details/${btoa(encodeURIComponent(JSON.stringify(product)))}`;
			},
			getApi() {
				axios.get('/api/data')
					.then(response => {
						if(response.data.code === 200) {
							this.products = response.data.lResult;
						}
					})
					.catch(error => console.log(error))
			}
		},
	}
</script>