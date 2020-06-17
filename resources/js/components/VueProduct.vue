<template>
  <tr>
    <td>{{ name }}</td>
    <td>{{ price }} DH</td>
    <td>{{ quantity }}</td>
  </tr>
</template>

<style >
</style>

<script>
export default {
  props: ["name", "price", "quantity"]
};
</script>