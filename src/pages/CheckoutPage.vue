<template>
  <div class="q-pa-md">
    <q-card>
      <q-card-section>
        <div class="text-h6">Checkout</div>
      </q-card-section>

      <q-separator />

      <!-- User Information Section -->
      <q-card-section>
        <div class="text-h7">User Information</div>
        <q-form @submit="submitCheckout">
          <q-input
            v-model="userInfo.name"
            filled
            label="Name"
            :rules="[(val) => !!val || 'Name is required']"
          />
          <q-input
            v-model="userInfo.email"
            filled
            label="Email"
            :rules="[(val) => !!val || 'Email is required']"
          />
        </q-form>
      </q-card-section>

      <q-separator />

      <!-- Shipping Address Section -->
      <q-card-section>
        <div class="text-h7">Shipping Address</div>
        <q-form @submit="submitCheckout">
          <q-input
            v-model="shippingAddress.address"
            filled
            label="Address"
            :rules="[(val) => !!val || 'Address is required']"
          />
          <q-input
            v-model="shippingAddress.city"
            filled
            label="City"
            :rules="[(val) => !!val || 'City is required']"
          />
          <q-input
            v-model="shippingAddress.postalCode"
            filled
            label="Postal Code"
            :rules="[(val) => !!val || 'Postal Code is required']"
          />
          <q-input
            v-model="shippingAddress.country"
            filled
            label="Country"
            :rules="[(val) => !!val || 'Country is required']"
          />
        </q-form>
      </q-card-section>

      <q-separator />

      <!-- Payment Details Section -->
      <q-card-section>
        <div class="text-h7">Payment Details</div>
        <q-form @submit="submitCheckout">
          <q-input
            v-model="paymentDetails.cardNumber"
            filled
            label="Card Number"
            :rules="[(val) => !!val || 'Card Number is required']"
          />
          <q-input
            v-model="paymentDetails.expiryDate"
            filled
            label="Expiry Date (MM/YY)"
            :rules="[(val) => !!val || 'Expiry Date is required']"
          />
          <q-input
            v-model="paymentDetails.cvv"
            filled
            label="CVV"
            :rules="[(val) => !!val || 'CVV is required']"
          />
        </q-form>
      </q-card-section>

      <q-separator />

      <!-- Order Summary Section -->
      <q-card-section>
        <div class="text-h7">Order Summary</div>
        <q-list bordered class="rounded-borders q-mt-md">
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
          </q-item>
        </q-list>
        <div class="text-right q-mt-md text-h6">
          Total: LKR {{ totalPrice }}
        </div>
      </q-card-section>

      <q-separator />

      <!-- Submit Button -->
      <q-card-section class="text-right">
        <q-btn color="green" @click="submitCheckout">Place Order</q-btn>
      </q-card-section>
    </q-card>
  </div>
</template>

<script>
export default {
  data() {
    return {
      userInfo: {
        name: "",
        email: "",
      },
      shippingAddress: {
        address: "",
        city: "",
        postalCode: "",
        country: "",
      },
      paymentDetails: {
        cardNumber: "",
        expiryDate: "",
        cvv: "",
      },
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
  methods: {
    submitCheckout() {
      // Implement the logic to handle checkout submission
      console.log("User Info:", this.userInfo);
      console.log("Shipping Address:", this.shippingAddress);
      console.log("Payment Details:", this.paymentDetails);
      console.log("Cart:", this.cart);

      // Redirect to a confirmation page or show a success message
      this.$router.push("/confirmation");
    },
  },
};
</script>

<style scoped></style>
