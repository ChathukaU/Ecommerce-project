<template>
  <q-page>
    <q-toolbar class="bg-primary text-white">
      <q-toolbar-title> My Account </q-toolbar-title>
    </q-toolbar>

    <q-tabs v-model="tab" align="left" class="bg-primary text-white shadow-2">
      <q-tab name="profile" label="Profile" />
      <q-tab name="orders" label="Order History" />
      <q-tab name="settings" label="Account Settings" />
    </q-tabs>

    <q-tab-panels v-model="tab">
      <q-tab-panel name="profile">
        <div class="q-pa-md">
          <q-card>
            <q-card-section>
              <div class="text-h6">Profile Information</div>
            </q-card-section>
            <q-separator />
            <q-card-section>
              <q-form @submit="updateProfile">
                <q-input v-model="user.name" filled label="Name" />
                <q-input v-model="user.email" filled label="Email" />
                <q-input v-model="user.phone" filled label="Phone" />
                <q-input
                  v-model="user.address"
                  filled
                  label="Address"
                  type="textarea"
                />
                <q-btn
                  label="Save"
                  type="submit"
                  color="primary"
                  class="q-mt-md"
                />
              </q-form>
            </q-card-section>
          </q-card>
        </div>
      </q-tab-panel>

      <q-tab-panel name="orders">
        <div class="q-pa-md">
          <q-card>
            <q-card-section>
              <div class="text-h6">Order History</div>
            </q-card-section>
            <q-separator />
            <q-card-section>
              <q-list>
                <q-item
                  v-for="order in orders"
                  :key="order.id"
                  v-ripple
                  clickable
                >
                  <q-item-section>
                    <q-item-label>{{ order.date }}</q-item-label>
                    <q-item-label caption>{{ order.total }}</q-item-label>
                  </q-item-section>
                  <q-item-section side>
                    <q-btn
                      flat
                      label="View"
                      color="primary"
                      @click="viewOrder(order.id)"
                    />
                  </q-item-section>
                </q-item>
              </q-list>
            </q-card-section>
          </q-card>
        </div>
      </q-tab-panel>

      <q-tab-panel name="settings">
        <div class="q-pa-md">
          <q-card>
            <q-card-section>
              <div class="text-h6">Account Settings</div>
            </q-card-section>
            <q-separator />
            <q-card-section>
              <q-form @submit="updateSettings">
                <q-input
                  v-model="settings.password"
                  filled
                  label="Password"
                  type="password"
                />
                <q-input
                  v-model="settings.confirmPassword"
                  filled
                  label="Confirm Password"
                  type="password"
                />
                <q-btn
                  label="Save"
                  type="submit"
                  color="primary"
                  class="q-mt-md"
                />
              </q-form>
            </q-card-section>
          </q-card>
        </div>
      </q-tab-panel>
    </q-tab-panels>
  </q-page>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      tab: "profile",
      user: {
        name: "",
        email: "",
        phone: "",
        address: "",
      },
      orders: [],
      settings: {
        password: "",
        confirmPassword: "",
      },
    };
  },
  created() {
    this.fetchUserProfile();
    this.fetchUserOrders();
  },
  methods: {
    async fetchUserProfile() {
      try {
        const response = await axios.get(
          "http://localhost/ecommerce/user_profile.php"
        );
        this.user = response.data;
      } catch (error) {
        console.error("Error fetching user profile:", error);
      }
    },
    async fetchUserOrders() {
      try {
        const response = await axios.get(
          "http://localhost/ecommerce/user_orders.php"
        );
        this.orders = response.data;
      } catch (error) {
        console.error("Error fetching user orders:", error);
      }
    },
    updateProfile() {
      axios
        .post("http://localhost/ecommerce/update_profile.php", this.user)
        .then((response) => {
          this.$q.notify({
            type: "positive",
            message: "Profile updated successfully",
          });
        })
        .catch((error) => {
          this.$q.notify({
            type: "negative",
            message: "Failed to update profile",
          });
          console.error("Error updating profile:", error);
        });
    },
    updateSettings() {
      if (this.settings.password !== this.settings.confirmPassword) {
        this.$q.notify({ type: "negative", message: "Passwords do not match" });
        return;
      }
      axios
        .post("http://localhost/ecommerce/update_settings.php", this.settings)
        .then((response) => {
          this.$q.notify({
            type: "positive",
            message: "Settings updated successfully",
          });
        })
        .catch((error) => {
          this.$q.notify({
            type: "negative",
            message: "Failed to update settings",
          });
          console.error("Error updating settings:", error);
        });
    },
    viewOrder(orderId) {
      this.$router.push(`/order/${orderId}`);
    },
  },
};
</script>

<style scoped>
.q-page {
  max-width: 1000px;
  margin: auto;
}
</style>
