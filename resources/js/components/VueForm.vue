<template>
  <form v-on:submit="addProduct">
    <!-- <div>
      <label for>Name</label>
      <input type="text" placeholer="Name" name="name" v-model="name" />
    </div>

    <div>
      <label for>Price</label>
      <input type="text" placeholer="col" name="price" v-model="price" />
    </div>

    <div>
      <label for>Quantity</label>
      <input type="text" placeholer="col" name="quantity" v-model="quantity" />
    </div>-->
    <vueinput col="name" label="name" v-on:inputChange="handleChange"></vueinput>
    <vueinput col="price" label="price" v-on:inputChange="handleChange"></vueinput>
    <vueinput col="quantity" label="quantity" v-on:inputChange="handleChange"></vueinput>

    <vuesubmit></vuesubmit>
  </form>
</template>

<style >
form {
  margin: 30px 0 10px 30px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}
</style>

<script>
import vueinput from "./VueInput.vue";
import vuesubmit from "./VueSubmit.vue";

export default {
  data() {
    return {
      name: "",
      price: "",
      quantity: ""
    };
  },
  methods: {
    handleChange(event) {
      let input = event.target.getAttribute("name");
      let val = event.target.value;

      if (input == "quantity") {
        this.quantity = val;
      } else if (input == "price") {
        this.price = val;
      } else if (input == "name") {
        this.name = val;
      }
    },

    addProduct(e) {
      //   e.preventDefault();

      fetch("/storeproduct", {
        method: "post",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({
          _token: document
            .querySelector('meta[name="csrf-token"]')
            .getAttribute("content"),
          name: this.name,
          price: this.price,
          quantity: this.quantity
        })
      })
        .then(res => res.json())
        .then(data => console.log(data));
    }
  }
};
</script>