<template>
  <!-- <div class="product">
    <div class="infos">
      <span>Product Name:</span>
      <span class="spaced">{{ name }}</span>
    </div>

    <div class="infos">
      <span>Product Price:</span>
      <span class="spaced">{{ price }} DH</span>
    </div>

    <div class="infos">
      <span>Product Quantity:</span>
      <span class="spaced">{{ quantity }}</span>
    </div>
  </div>-->

  <tr>
    <td>{{ name }}</td>
    <td>{{ price }} DH</td>
    <td>{{ quantity }}</td>
  </tr>
</template>

<style >
/* .infos {
  margin: 10px 0;
  font-size: 18px;
}
.product {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  align-items: center;
  margin: 10px 0;
  padding: 10px 20px;
  background: lightskyblue;
}
.spaced {
  margin-left: 20px;
} */
</style>

<script>
export default {
  props: ["name", "price", "quantity"]
};
</script>