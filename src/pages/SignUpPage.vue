<template>
  <q-layout>
    <q-page-container>
      <q-page class="flex flex-center" style="font-family: Lato">
        <!--        <div id="particles-js"></div>-->
        <q-card
          :style="$q.platform.is.desktop ? 'width:55%;' : ''"
          class="row my-card items-center q-pa-none q-ma-none shadow-24"
        >
          <q-card-section
            v-if="$q.platform.is.desktop"
            class="col-md-4 col-lg-4 col-sm-12 sol-xs-12 items-center float-left"
            style="background-color: #1f509e"
            :style="{ height: win_height - 270 + 'px' }"
            horizontal
          >
            <div class="text-center full-width">
              <div><img src="src\assets\logo.png" style="width: 33%" /></div>
              <div class="text-weight-bolder text-white text-h6">
                Enigma Shopping
              </div>
              <div class="text-caption text-white">One stop solution</div>
            </div>
          </q-card-section>
          <q-card-section
            class="col-md-8 col-lg-8 col-sm-12 sol-xs-12 float-left"
          >
            <q-card-section class="items-center">
              <div>
                <div
                  v-if="!$q.platform.is.desktop"
                  class="text-weight-bolder text-center q-mb-md text-primary text-h6"
                >
                  Enigma Shopping
                </div>
                <q-form
                  :style="
                    $q.platform.is.desktop
                      ? 'width:55%;margin: auto;'
                      : 'margin: auto;'
                  "
                  class="q-gutter-md"
                >
                  <span class="text-subtitle1 text-weight-bold text-grey-7"
                    >Sign Up</span
                  >
                  <q-input
                    v-model="first_name"
                    dense
                    outlined
                    label="First Name"
                    lazy-rules
                    required
                  />

                  <q-input
                    v-model="last_name"
                    dense
                    outlined
                    label="Last Name"
                    lazy-rules
                    required
                  />

                  <q-input
                    v-model="username"
                    dense
                    outlined
                    label="Username"
                    lazy-rules
                    required
                  />

                  <q-input
                    v-model="password"
                    dense
                    type="password"
                    outlined
                    label="Password"
                    lazy-rules
                    required
                  />

                  <div>
                    <q-btn
                      class="text-capitalize"
                      size="sm"
                      style="width: 75px"
                      dense
                      label="Sign Up"
                      to="/shop"
                      type="submit"
                      color="primary"
                    />
                    <q-btn
                      class="float-right text-blue-9 text-capitalize"
                      size="sm"
                      style="width: 75px; border: 1px solid #36669e"
                      dense
                      label="cancel"
                      to="/"
                      type="button"
                    />
                  </div>
                </q-form>
              </div>
            </q-card-section>
          </q-card-section>
        </q-card>
      </q-page>
    </q-page-container>
  </q-layout>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      first_name: "",
      last_name: "",
      username: "",
      password: "",
    };
  },

  computed: {
    win_width() {
      return this.$q.screen.width - 59;
    },
    win_height() {
      return this.$q.screen.height - 0;
    },
  },
  mounted() {},

  methods: {
    async register() {
      try {
        const response = await axios.post(
          "http://localhost/ecommerce/register.php",
          {
            first_name: this.first_name,
            last_name: this.last_name,
            username: this.username,
            password: this.password,
          }
        );
        alert(response.data);
        if (response.data === "Registration successful") {
          this.$router.push("/signin");
        }
      } catch (error) {
        alert("Registration failed");
      }
    },
  },
};
</script>

<style>
.my-card {
  /*width: 55%;*/
  height: 30%;
}

#particles-js {
  position: absolute;
  width: 100%;
  height: 100%;
  /*background: linear-gradient(145deg, #abbaab 15%, #ffffff 70%);*/
  /*background: linear-gradient(145deg,#f7f8f8 11%, #627e79 75%);*/
  background-repeat: no-repeat;
  background-size: cover;
  background-position: 50% 50%;
}

.login-form {
  position: absolute;
}
</style>
