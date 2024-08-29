<template>
    <div class="custom-container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="product-detail">
                    <div class="row">
                        <div class="col-md-6">
                            <img :src="detailsProduct.path" alt="detalle-producto" class="img-fluid">
                        </div>

                        <div class="col-md-6 d-flex flex-column justify-conten-center">
                            <h1 class="product-title">{{ detailsProduct.nombre }}</h1>
                            <p class="product-price">$ {{ detailsProduct.price }}</p>
                            <p class="product-stock">Disponible: {{ detailsProduct.stock }} unidades</p>
                            <p class="product-description">{{ detailsProduct.description }}</p>
                            <button class="btn btn-dark btn-lg mt-4">Agregar al carrito</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['product'],
        data() {
            return {
                detailsProduct: ''
            }
        },
        mounted() {
            console.log(JSON.parse(decodeURIComponent(atob(this.product))));
            this.detailsProduct = JSON.parse(decodeURIComponent(atob(this.product)))
        },
    }
</script>

<style scoped>
.custom-container {
    padding-left: 10%;
    padding-right: 10%;
}
.product-detail-container {
  background-color: #f9f9f9;
  border-radius: 10px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.image-container {
  padding: 15px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.img-fluid {
  max-height: 500px;
  object-fit: contain;
  border-radius: 10px;
}

.product-title {
  font-size: 2.5rem;
  font-weight: bold;
  color: #333;
  margin-bottom: 20px;
}

.product-price {
  font-size: 1.75rem;
  color: #E53935;
  font-weight: bold;
  margin-bottom: 15px;
}

.product-stock {
  font-size: 1rem;
  color: #4CAF50;
  margin-bottom: 15px;
}

.product-description {
  font-size: 1.1rem;
  color: #666;
  line-height: 1.6;
}

.btn-dark {
  background-color: #333;
  border-color: #333;
}

.btn-dark:hover {
  background-color: #555;
  border-color: #555;
}
</style>