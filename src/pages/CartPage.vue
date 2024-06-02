<template>
  <div>
    <div class="row q-mt-sm">
      <div class="col-12">
        <q-card class="q-pa-md">
          <q-card-section>
            <div class="text-h6">My Cart</div>
          </q-card-section>
          <q-separator />
          <q-card-section>
            <q-list bordered class="rounded-borders">
              <q-item
                v-for="(item, index) in cart"
                :key="index"
                v-ripple
                class="q-pa-sm"
              >
                <q-item-section avatar>
                  <img
                    :src="`http://localhost/ecommerce/images/${item.image}`"
                    alt="Product Image"
                    width="50"
                  />
                </q-item-section>
                <q-item-section>
                  <q-item-label>{{ item.title }}</q-item-label>
                  <q-item-label caption>
                    LKR {{ item.price }} x {{ item.quantity }}
                  </q-item-label>
                  <q-item-label caption>{{ item.description }}</q-item-label>
                </q-item-section>
                <q-item-section side>
                  <div class="row items-center">
                    <q-btn
                      dense
                      flat
                      icon="remove"
                      @click="decreaseQuantity(index)"
                    />
                    <span class="q-mx-md">{{ item.quantity }}</span>
                    <q-btn
                      dense
                      flat
                      icon="add"
                      @click="increaseQuantity(index)"
                    />
                    <q-btn
                      dense
                      flat
                      color="red"
                      icon="delete"
                      @click="removeItem(index)"
                    />
                  </div>
                </q-item-section>
              </q-item>
            </q-list>
            <div v-if="cart.length === 0" class="text-center q-pa-md">
              <div class="text-h6">Your cart is empty</div>
              <q-btn
                color="primary"
                class="q-mt-md"
                @click="$router.push('/products')"
                >Go to Products</q-btn
              >
            </div>
          </q-card-section>
          <q-separator v-if="cart.length > 0" />
          <q-card-section v-if="cart.length > 0">
            <div class="row justify-end">
              <div class="col-6 text-right">
                <div class="text-h6">Total: LKR {{ totalPrice }}</div>
                <q-btn color="green" class="q-mt-md" @click="proceedToCheckout"
                  >Proceed to Checkout</q-btn
                >
              </div>
            </div>
          </q-card-section>
        </q-card>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      cart: [
        {
          title: "Product 1",
          description: "This is a great product.",
          price: 1000,
          quantity: 2,
          image: "product1.jpg",
        },
        {
          title: "Product 2",
          description: "This product is also great.",
          price: 1500,
          quantity: 1,
          image: "product2.jpg",
        },
        {
          title: "Product 3",
          description: "You will love this product.",
          price: 2000,
          quantity: 3,
          image: "product3.jpg",
        },
      ],
    };
  },
  computed: {
    totalPrice() {
      return this.cart.reduce(
        (total, item) => total + item.price * item.quantity,
        0
      );
    },
  },
  created() {
    this.loadCart();
  },
  methods: {
    increaseQuantity(index) {
      this.cart[index].quantity += 1;
      this.saveCart();
    },
    decreaseQuantity(index) {
      if (this.cart[index].quantity > 1) {
        this.cart[index].quantity -= 1;
        this.saveCart();
      }
    },
    removeItem(index) {
      this.cart.splice(index, 1);
      this.saveCart();
    },
    saveCart() {
      localStorage.setItem("cart", JSON.stringify(this.cart));
    },
    proceedToCheckout() {
      // Implement the checkout logic here
      this.$router.push("/checkout");
    },
  },
  methods: {
    loadCart() {
      const storedCart = localStorage.getItem("cart");
      if (storedCart) {
        this.cart = JSON.parse(storedCart);
      } else {
        this.saveCart();
      }
    },
    // eslint-disable-next-line vue/no-dupe-keys
    saveCart() {
      localStorage.setItem("cart", JSON.stringify(this.cart));
    },
    // eslint-disable-next-line vue/no-dupe-keys
    increaseQuantity(index) {
      this.cart[index].quantity += 1;
      this.saveCart();
    },
    // eslint-disable-next-line vue/no-dupe-keys
    decreaseQuantity(index) {
      if (this.cart[index].quantity > 1) {
        this.cart[index].quantity -= 1;
        this.saveCart();
      }
    },
    // eslint-disable-next-line vue/no-dupe-keys
    removeItem(index) {
      this.cart.splice(index, 1);
      this.saveCart();
    },
    // eslint-disable-next-line vue/no-dupe-keys
    proceedToCheckout() {
      // Implement the checkout logic here
      this.$router.push("/checkout");
    },
  },
};
</script>

<style scoped></style>
