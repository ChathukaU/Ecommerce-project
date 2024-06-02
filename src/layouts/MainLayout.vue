<template>
  <q-layout view="lHh LpR lFf" style="font-family: Lato"
    ><!--
    <q-header reveal elevated style="background-color: #1f509e;"> -->

    <q-header reveal elevated style="background-color: #61100c">
      <q-toolbar v-if="!$q.platform.is.desktop" class="q-py-sm">
        <div class="row">
          <div class="col-sm-12 col-xs-12">
            <q-toolbar-title>
              <img
                class="cursor-pointer float-left"
                src="images/logo.png"
                style="width: 12%"
                @click="$router.push('/shop')"
              />
              <span
                class="float-left q-mt-xs q-ml-md text-h6 text-weight-bold"
                style="font-size: 17px"
                >Quasar Shopping</span
              >
            </q-toolbar-title>
          </div>
          <div class="col-sm-12 col-xs-12 q-mt-md">
            <q-input
              v-model="text"
              class="float-left q-mx-md full-width"
              square
              bg-color="white"
              dense
              outlined
              label="Search for products, brands and more.."
            />
          </div>
          <div class="col-sm-12 col-xs-12 q-mt-md">
            <div>
              <q-btn
                class="q-mr-md"
                dense
                round
                flat
                icon="shopping_cart"
                to="/cart"
              >
                <q-badge color="red" class="text-bold" floating transparent>
                  1
                </q-badge>
              </q-btn>
              <q-btn flat round dense icon="settings" class="q-mr-md" />
              <q-btn flat round dense icon="settings" to="/account" />
            </div>
          </div>
        </div>
        <!--          <q-btn @click="left = !left" flat round dense icon="menu" class="q-mr-sm" />-->

        <!--<q-btn flat dense icon="shopping_cart" class="text-capitalize q-mr-md text-bold" label="Cart"/>-->
      </q-toolbar>
      <q-toolbar v-if="$q.platform.is.desktop" class="q-py-sm">
        <!--          <q-btn @click="left = !left" flat round dense icon="menu" class="q-mr-sm" />-->
        <img
          class="cursor-pointer"
          src="src\assets\logo.png"
          style="width: 3%"
          @click="$router.push('/shop')"
        />
        <q-toolbar-title>
          <span
            class="float-left q-mt-xs text-h6 text-weight-bold"
            style="font-size: 17px"
            >Enigma Shopping</span
          >
          <q-input
            v-model="text"
            class="float-left q-ml-xl"
            style="width: 650px"
            square
            bg-color="white"
            dense
            outlined
            label="Search for products, brands and more..."
          />
        </q-toolbar-title>

        <!--<q-btn flat dense icon="shopping_cart" class="text-capitalize q-mr-md text-bold" label="Cart"/>-->
        <q-btn class="q-mr-md" dense round flat icon="shopping_cart" to="/cart">
          <q-badge color="red" class="text-bold" floating transparent>
            1
          </q-badge>
        </q-btn>
        <q-btn
          class="q-mr-md"
          flat
          round
          dense
          icon="account_circle"
          to="/account"
        />
        <q-btn class="q-mr-md" flat round dense icon="exit_to_app" to="/" />
      </q-toolbar>
      <div class="bg-white text-grey-9 text-weight-bold shadow-transition">
        <div
          class="row text-center items-center"
          :style="$q.platform.is.desktop ? 'height: 38px' : ''"
        >
          <div
            class="col-lg-2 col-md-2 col-sm-12 col-xs-12 cursor-pointer hover-blue"
            @mouseover="menu_cat_elc = true"
          >
            Electronics
            <q-menu
              v-model="menu_cat_elc"
              fit
              transition-show="flip-right"
              transition-hide="flip-left"
              @mouseleave="menu_cat_elc = false"
            >
              <q-list dense class="text-grey-9 text-caption">
                <q-item clickable @click="$router.push('/category')">
                  <q-item-section>Mobiles</q-item-section>
                </q-item>
                <q-item clickable @click="$router.push('/category')">
                  <q-item-section>Laptops</q-item-section>
                </q-item>
                <q-item clickable @click="$router.push('/category')">
                  <q-item-section>Health Care Appliances</q-item-section>
                </q-item>
                <!--<q-separator/>-->
                <q-item clickable @click="$router.push('/category')">
                  <q-item-section>Speakers</q-item-section>
                </q-item>
                <q-item clickable @click="$router.push('/category')">
                  <q-item-section>Smart Home Automation</q-item-section>
                </q-item>
              </q-list>
            </q-menu>
            <q-icon
              size="sm"
              class="q-ml-xs text-grey-5"
              name="keyboard_arrow_down"
            ></q-icon>
          </div>
          <div
            class="col-lg-2 col-md-2 col-sm-12 col-xs-12 cursor-pointer hover-blue"
            @mouseover="menu_cat_tvs = true"
          >
            TVs and Appliances
            <q-menu
              v-model="menu_cat_tvs"
              fit
              transition-show="flip-right"
              transition-hide="flip-left"
              @mouseleave="menu_cat_tvs = false"
            >
              <q-list dense class="text-grey-9 text-caption">
                <q-item clickable @click="$router.push('/category')">
                  <q-item-section>Television</q-item-section>
                </q-item>
                <q-item clickable @click="$router.push('/category')">
                  <q-item-section>Air Conditioners</q-item-section>
                </q-item>
                <q-item clickable @click="$router.push('/category')">
                  <q-item-section>Health Care Appliances</q-item-section>
                </q-item>
                <!--<q-separator/>-->
                <q-item clickable @click="$router.push('/category')">
                  <q-item-section>Shop By Screen Size</q-item-section>
                </q-item>
                <q-item clickable @click="$router.push('/category')">
                  <q-item-section>Smart Home Appliances</q-item-section>
                </q-item>
              </q-list>
            </q-menu>
            <q-icon
              size="sm"
              class="q-ml-xs text-grey-5"
              name="keyboard_arrow_down"
            ></q-icon>
          </div>
          <div
            class="col-lg-2 col-md-2 col-sm-12 col-xs-12 cursor-pointer hover-blue"
            @mouseover="menu_cat_men = true"
          >
            Men
            <q-menu
              v-model="menu_cat_men"
              fit
              transition-show="flip-right"
              transition-hide="flip-left"
              @mouseleave="menu_cat_men = false"
            >
              <q-list dense class="text-grey-9 text-caption">
                <q-item clickable @click="$router.push('/category')">
                  <q-item-section>Footwear</q-item-section>
                </q-item>
                <q-item clickable @click="$router.push('/category')">
                  <q-item-section>Clothing</q-item-section>
                </q-item>
                <q-item clickable @click="$router.push('/category')">
                  <q-item-section>Sports & Fitness Store</q-item-section>
                </q-item>
              </q-list>
            </q-menu>
            <q-icon
              size="sm"
              class="q-ml-xs text-grey-5"
              name="keyboard_arrow_down"
            ></q-icon>
          </div>
          <div
            class="col-lg-2 col-md-2 col-sm-12 col-xs-12 cursor-pointer hover-blue"
          >
            Women
            <q-icon
              size="sm"
              class="q-ml-xs text-grey-5"
              name="keyboard_arrow_down"
            ></q-icon>
          </div>
          <div
            class="col-lg-2 col-md-2 col-sm-12 col-xs-12 cursor-pointer hover-blue"
          >
            Home & Furniture
            <q-icon
              size="sm"
              class="q-ml-xs text-grey-5"
              name="keyboard_arrow_down"
            ></q-icon>
          </div>
          <div
            class="col-lg-2 col-md-2 col-sm-12 col-xs-12 cursor-pointer hover-blue"
          >
            Offers
          </div>
        </div>
      </div>
    </q-header>

    <q-page-container style="background-color: #f1f2f6">
      <router-view />
      <div class="q-mt-sm">
        <div class="row q-pa-md bg-primary">
          <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12"></div>
          <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 text-white">
            <div
              class="text-subtitle1 text-weight-bold"
              @click="$router.push('/about')"
            >
              About
            </div>
            <div
              class="text-caption hover_underline_white q-mt-sm"
              @click="$router.push('/contact')"
            >
              Contact us
            </div>
            <div
              class="text-caption hover_underline_white"
              @click="$router.push('/about')"
            >
              About Us
            </div>
            <div class="text-caption hover_underline_white">Careers</div>
            <div class="text-caption hover_underline_white">Our Stories</div>
            <div class="text-caption hover_underline_white">Press</div>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 text-white">
            <div
              class="text-subtitle1 text-weight-bold"
              @click="$router.push('/contact')"
            >
              Connect with Us
            </div>
            <div class="text-caption hover_underline_white q-mt-sm">
              Facebook
            </div>
            <div class="text-caption hover_underline_white">Instagram</div>
            <div class="text-caption hover_underline_white">Twitter</div>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 text-white">
            <div class="text-subtitle1 text-weight-bold">Policy</div>
            <div class="text-caption hover_underline_white q-mt-sm">
              Return Policy
            </div>
            <div class="text-caption hover_underline_white">Terms Of Use</div>
            <div class="text-caption hover_underline_white">Security</div>
            <div class="text-caption hover_underline_white">Privacy</div>
            <div class="text-caption hover_underline_white">Sitemap</div>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 text-white">
            <div class="text-subtitle1 text-weight-bold">Help</div>
            <div class="text-caption hover_underline_white q-mt-sm">
              Payments
            </div>
            <div class="text-caption hover_underline_white">Shipping</div>
            <div class="text-caption hover_underline_white">
              Cancellation & Returns
            </div>
            <div class="text-caption hover_underline_white">FAQ</div>
          </div>
          <div
            class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-white"
            :class="$q.platform.is.desktop ? 'q-pl-xl' : ''"
            :style="
              $q.platform.is.desktop ? 'border-left: 1px solid grey;' : ''
            "
          >
            <div class="text-subtitle1 text-weight-bold">
              Registered Office Address:
            </div>
            <div class="text-caption q-mt-sm">25, noname Road</div>
            <div class="text-caption">Chilaw</div>
            <div class="text-caption">61000</div>
            <div class="text-caption">Sri Lanka</div>
          </div>
        </div>
        <div style="background-color: #163758"></div>
      </div>
    </q-page-container>
  </q-layout>
</template>

<!-- <script setup>
import { ref } from "vue";
import EssentialLink from "components/EssentialLink.vue";

defineOptions({
  name: "MainLayout",
});

const leftDrawerOpen = ref(false);

function toggleLeftDrawer() {
  leftDrawerOpen.value = !leftDrawerOpen.value;
}
</script> -->
<script>
export default {
  data() {
    return {
      left: false,
      menu_cat_elc: false,
      menu_cat_tvs: false,
      menu_cat_men: false,
      text: "",
    };
  },
};
</script>

<style>
.q-drawer {
  /*background-image: url(https://demos.creative-tim.com/vue-material-dashboard/img/sidebar-2.32103624.jpg) !important;*/
  background-image: url("/images/lake.jpg") !important;
  background-size: cover !important;
}

.q-drawer__content {
  background-color: rgba(1, 1, 1, 0.75);
}

.navigation-item {
  border-radius: 5px;
}

.tab-active {
  background-color: green;
}

.hover-blue:hover {
  color: #1f509e;
}

.hover_underline_white:hover {
  text-decoration: underline !important;
  cursor: pointer;
}

.hover_border_grey:hover {
  border: 1px solid lightgrey;
  cursor: pointer;
  border-radius: 3px;
}
</style>
