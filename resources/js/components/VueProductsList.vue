<template>
  <div id="list">
    <!-- <div v-for="product in products" v-bind:key="product.id">
      <vueproduct :name="product.name" :price="product.price" :quantity="product.quantity"></vueproduct>
    </div>-->

    <table>
      <tr>
        <th>Product Name</th>
        <th>Product Price</th>
        <th>Available Quantity</th>
      </tr>

      <vueproduct
        v-for="product in products"
        v-bind:key="product.id"
        :name="product.name"
        :price="product.price"
        :quantity="product.quantity"
      ></vueproduct>
    </table>
  </div>
</template>

<style >
/* #list {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
} */

table {
  border-collapse: collapse;
  width: 60%;
  margin: 20px;
}

th,
td {
  text-align: center;
  padding: 8px;
}
th {
  background-color: #2196f3;
  color: white;
}
tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style>

<script>
import vueproduct from "./VueProduct.vue";

export default {
  data() {
    return {
      products: []
    };
  },

  created() {
    this.fetchProducts();
  },

  methods: {
    fetchProducts() {
      fetch("/allproducts")
        .then(res => res.json())
        .then(data => {
          console.log(data);
          this.products = data;
        });
    }
  }
};
</script>