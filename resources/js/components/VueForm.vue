<template>
  <form v-on:submit="addProduct">
    <vueinput col="name" label="name" v-on:inputChange="handleChange" :val="oldname"></vueinput>
    <vueinput col="price" label="price" v-on:inputChange="handleChange" :val="oldprice"></vueinput>
    <vueinput col="quantity" label="quantity" v-on:inputChange="handleChange" :val="oldquantity"></vueinput>

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
  props: ["oldname", "oldprice", "oldquantity"],

  data() {
    return {
      name: this.oldname,
      price: this.oldprice,
      quantity: this.oldquantity
    };
  },

  //   can also initialise state values in the created LifeC method
  //   created() {
  //     this.name = this.oldname;
  //     this.price = this.oldprice;
  //     this.quantity = this.oldquantity;
  //   },

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

    addProduct() {
      //   e.preventDefault();

      fetch("/storeproduct", {
        method: "post",
        headers: {
          "Content-Type": "application/json"
        },
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