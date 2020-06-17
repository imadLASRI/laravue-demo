<template>
  <div>
    <!-- <label for>{{ label }}</label> -->
    <input
      type="text"
      class="textInput"
      :placeholder="'Product ' + col"
      autocomplete="off"
      :name="col"
      v-on:input="(event) => this.$emit('inputChange', event)"
    />
  </div>
</template>

<style >
label {
  font-size: 15px;
  color: black;
  margin: 5px;
  display: block;
}

.textInput {
  width: 300px;
  height: 15px;
  border: 1px solid #dadada;
  border-radius: 50px;
  padding: 15px 25px;
  margin-bottom: 15px;
  font-size: 15px;
  font-weight: 400;
  outline: none;
}

.textInput:focus {
  border: 2px solid #00abe9;
}
</style>


<script>
export default {
  props: ["col", "label"]
};
</script>