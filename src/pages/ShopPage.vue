<!-- <template>

        <q-card
          v-for="product in products"
          :key="product.id"
          class="q-mb-md"
          style="width: 300px"
        >
          <q-img :src="`http://localhost/ecommerce/images/${product.image}`" />
          <q-card-section>
            <q-card-title>{{ product.title }}</q-card-title>
            <q-card-subtitle>${{ product.price }}</q-card-subtitle>
            <q-btn
              label="View Details"
              color="primary"
              @click="viewDetails(product.id)"

</template> -->

<template>
  <q-page class="q-mt-sm">
    <div class="row q-col-gutter-sm">
      <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
        <q-carousel
          v-model="slide"
          :class="$q.platform.is.desktop ? 'q-ml-sm' : ''"
          arrows
          animated
          height="250px"
        >
          <q-carousel-slide name="first" img-src="src/assets/web_banner.jpg">
            <div class="absolute-bottom custom-caption">
              <div class="text-subtitle1">Black Friday</div>
              <div class="text-caption">Super Sale</div>
            </div>
          </q-carousel-slide>
          <q-carousel-slide name="second" img-src="src/assets/web_banner.jpg">
            <div class="absolute-bottom custom-caption">
              <div class="text-subtitle1">Black Friday</div>
              <div class="text-caption">Super Sale</div>
            </div>
          </q-carousel-slide>
          <q-carousel-slide name="third" img-src="src/assets/web_banner.jpg">
            <div class="absolute-bottom custom-caption">
              <div class="text-subtitle1">Black Friday</div>
              <div class="text-caption">Super Sale</div>
            </div>
          </q-carousel-slide>
        </q-carousel>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
        <q-card
          class="bg-white q-pt-sm"
          :class="$q.platform.is.desktop ? 'q-mr-sm' : ''"
        >
          <img src="src/assets/zip.png" style="margin: auto; width: 32%" />
          <q-card-section class="q-pt-xs">
            <div class="text-caption text-center text-grey-7">
              Your Delivery Pincode
            </div>
            <div class="text-caption text-center q-mt-sm text-grey-9">
              Enter your pincode to check availability and faster options
            </div>
            <div class="q-mt-sm">
              <q-input dense outlined placeholder="Enter pincode"></q-input>
            </div>
            <div class="q-mt-xs" style="display: flex; justify-content: center">
              <div style="display: block; height: 22px">
                <q-btn
                  size="sm"
                  label="Save"
                  class="q-mt-xs text-capitalize bg-primary text-white float-right"
                />
              </div>
            </div>
          </q-card-section>
        </q-card>
      </div>
    </div>
    <div class="text-grey-9 text-weight-bold">
      <div class="row items-center q-mx-sm">
        <div class="col-12 q-mt-sm">
          <div class="q-pl-md bg-white q-pt-sm">
            <span class="text-grey-9 text-h6 text-weight-bold"
              >Latest Launches</span
            >
            <!-- <a class="text-primary q-ml-sm cursor-pointer">[see all]</a> -->
          </div>
          <q-carousel
            v-model="latest_slide"
            transition-prev="slide-right"
            transition-next="slide-left"
            swipeable
            animated
            control-color="primary"
            navigation
            padding
            arrows
            height="260px"
            class="rounded-borders"
          >
            <q-carousel-slide
              v-for="(val, idx) in [1, 2, 3]"
              :key="idx"
              :name="val"
              class="column no-wrap"
            >
              <div
                class="row fit justify-start items-center q-gutter-xs q-col-gutter no-wrap"
              >
                <div
                  class="col-lg-2 col-md-2 col-sm-12 col-xs-12 hover_border_grey text-center full-height"
                  @click="$router.push('/details')"
                >
                  <q-img
                    style="margin: auto; width: 50%"
                    class="rounded-borders"
                    src="src/assets/Phone.png"
                  >
                  </q-img>
                  <div>Redmi 12</div>
                  <div class="text-caption text-weight-bold text-green">
                    5000h mAh Battery
                  </div>
                  <div>
                    <span>LKR 8,499</span
                    ><span
                      class="q-ml-sm text-grey-6"
                      style="text-decoration: line-through"
                      >LKR 10,999</span
                    >
                  </div>
                </div>
                <div
                  class="col-lg-2 col-md-2 col-sm-12 col-xs-12 hover_border_grey text-center full-height"
                  @click="$router.push('/details')"
                >
                  <q-img
                    style="margin: auto; width: 50%"
                    class="rounded-borders"
                    src="src/assets/Phone.png"
                  >
                  </q-img>
                  <div>Redmi 12</div>
                  <div class="text-caption text-weight-bold text-green">
                    5000h mAh Battery
                  </div>
                  <div>
                    <span>LKR 8,499</span
                    ><span
                      class="q-ml-sm text-grey-6"
                      style="text-decoration: line-through"
                      >LKR 10,999</span
                    >
                  </div>
                </div>
                <div
                  class="col-lg-2 col-md-2 col-sm-12 col-xs-12 hover_border_grey text-center full-height"
                  @click="$router.push('/details')"
                >
                  <q-img
                    style="margin: auto; width: 50%"
                    class="rounded-borders"
                    src="src/assets/Phone.png"
                  >
                  </q-img>
                  <div>Redmi 12</div>
                  <div class="text-caption text-weight-bold text-green">
                    5000h mAh Battery
                  </div>
                  <div>
                    <span>LKR 8,499</span
                    ><span
                      class="q-ml-sm text-grey-6"
                      style="text-decoration: line-through"
                      >LKR 10,999</span
                    >
                  </div>
                </div>
                <div
                  class="col-lg-2 col-md-2 col-sm-12 col-xs-12 hover_border_grey text-center full-height"
                  @click="$router.push('/details')"
                >
                  <q-img
                    style="margin: auto; width: 50%"
                    class="rounded-borders"
                    src="src/assets/Phone.png"
                  >
                  </q-img>
                  <div>Redmi 12</div>
                  <div class="text-caption text-weight-bold text-green">
                    5000h mAh Battery
                  </div>
                  <div>
                    <span>LKR 8,499</span
                    ><span
                      class="q-ml-sm text-grey-6"
                      style="text-decoration: line-through"
                      >LKR 10,999</span
                    >
                  </div>
                </div>
                <div
                  class="col-lg-2 col-md-2 col-sm-12 col-xs-12 hover_border_grey text-center full-height"
                  @click="$router.push('/details')"
                >
                  <q-img
                    style="margin: auto; width: 50%"
                    class="rounded-borders"
                    src="src/assets/Phone.png"
                  >
                  </q-img>
                  <div>Redmi 12</div>
                  <div class="text-caption text-weight-bold text-green">
                    5000h mAh Battery
                  </div>
                  <div>
                    <span>LKR 8,499</span
                    ><span
                      class="q-ml-sm text-grey-6"
                      style="text-decoration: line-through"
                      >LKR 10,999</span
                    >
                  </div>
                </div>
                <div
                  class="col-lg-2 col-md-2 col-sm-12 col-xs-12 hover_border_grey text-center full-height"
                  @click="$router.push('/details')"
                >
                  <q-img
                    style="margin: auto; width: 50%"
                    class="rounded-borders"
                    src="src/assets/Phone.png"
                  >
                  </q-img>
                  <div>Redmi 12</div>
                  <div class="text-caption text-weight-bold text-green">
                    5000h mAh Battery
                  </div>
                  <div>
                    <span>LKR 8,499</span
                    ><span
                      class="q-ml-sm text-grey-6"
                      style="text-decoration: line-through"
                      >LKR 10,999</span
                    >
                  </div>
                </div>
              </div>
            </q-carousel-slide>
          </q-carousel>
        </div>
      </div>
      <div class="row items-center q-mx-sm">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 q-mt-sm">
          <div class="q-pl-md bg-white q-pt-sm">
            <span class="text-grey-9 text-h6 text-weight-bold"
              >Trending in</span
            >
            <!-- <a class="text-primary q-ml-sm cursor-pointer">see more..</a> -->
          </div>
          <q-carousel
            v-model="trending_slide"
            transition-prev="slide-right"
            transition-next="slide-left"
            swipeable
            animated
            control-color="primary"
            navigation
            padding
            arrows
            height="260px"
            class="rounded-borders"
          >
            <q-carousel-slide
              v-for="(val, idx) in [1, 2, 3]"
              :key="idx"
              :name="val"
              class="column no-wrap"
            >
              <div
                class="row fit justify-start items-center q-gutter-xs q-col-gutter no-wrap"
              >
                <q-img
                  style="border: 1px solid lightgrey"
                  class="rounded-borders col-lg-3 col-md-3 col-sm-12 col-xs-12 cursor-pointer full-height"
                  src="src/assets/Phone.png"
                  @click="$router.push('/category')"
                >
                  <div
                    class="absolute-bottom custom-caption"
                    style="background-color: rgba(0, 0, 0, 0.5)"
                  >
                    <div class="text-caption text-weight-bolder">
                      Electronics
                    </div>
                  </div>
                </q-img>
                <q-img
                  style="border: 1px solid lightgrey"
                  class="rounded-borders col-lg-3 col-md-3 col-sm-12 col-xs-12 cursor-pointer full-height"
                  src="src/assets/Phone.png"
                  @click="$router.push('/category')"
                >
                  <div
                    class="absolute-bottom custom-caption"
                    style="background-color: rgba(0, 0, 0, 0.5)"
                  >
                    <div class="text-caption text-weight-bolder">
                      TVs and Appliances
                    </div>
                  </div>
                </q-img>
                <q-img
                  style="border: 1px solid lightgrey"
                  class="rounded-borders col-lg-3 col-md-3 col-sm-12 col-xs-12 cursor-pointer full-height"
                  src="src/assets/Phone.png"
                  @click="$router.push('/category')"
                >
                  <div
                    class="absolute-bottom custom-caption"
                    style="background-color: rgba(0, 0, 0, 0.5)"
                  >
                    <div class="text-caption text-weight-bolder">Men</div>
                  </div>
                </q-img>
                <q-img
                  style="border: 1px solid lightgrey"
                  class="rounded-borders col-lg-3 col-md-3 col-sm-12 col-xs-12 cursor-pointer full-height"
                  src="src/assets/Phone.png"
                  @click="$router.push('/category')"
                >
                  <div
                    class="absolute-bottom custom-caption"
                    style="background-color: rgba(0, 0, 0, 0.5)"
                  >
                    <div class="text-caption text-weight-bolder">Women</div>
                  </div>
                </q-img>
              </div>
            </q-carousel-slide>
          </q-carousel>
        </div>
      </div>
      <div class="row q-mt-sm q-mx-sm bg-white text-center">
        <div
          class="col-lg-2 col-md-2 col-sm-12 col-xs-12"
          style="border-right: 1px solid lightgrey"
        ></div>
        <div
          class="col-lg-2 col-md-2 col-sm-12 col-xs-12"
          style="border-right: 1px solid lightgrey"
        >
          <q-img src="src/assets/Phone.png"></q-img>
          <div class="text-subtitle1 q-mb-sm text-grey-8">
            100% Secure Payments
          </div>
        </div>
        <div
          class="col-lg-2 col-md-2 col-sm-12 col-xs-12"
          style="border-right: 1px solid lightgrey"
        >
          <q-img src="src/assets/Phone.png"></q-img>
          <div class="text-subtitle1 q-mb-sm text-grey-8">Trustpay</div>
        </div>
        <div
          class="col-lg-2 col-md-2 col-sm-12 col-xs-12"
          style="border-right: 1px solid lightgrey"
        >
          <q-img src="src/assets/Phone.png"></q-img>
          <div class="text-subtitle1 q-mb-sm text-grey-8">Help Center</div>
        </div>
        <div
          class="col-lg-2 col-md-2 col-sm-12 col-xs-12"
          style="border-right: 1px solid lightgrey"
        >
          <q-img src="src/assets/Phone.png"></q-img>
          <div class="text-subtitle1 q-mb-sm text-grey-8">Shop On The Go</div>
        </div>
      </div>
    </div>
  </q-page>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      slide: "first",
      trending_slide: 1,
      latest_slide: 1,
      products: [],
    };
  },
  created() {
    this.fetchProducts();
  },
  methods: {
    async fetchProducts() {
      const response = await axios.get(
        "http://localhost/ecommerce/products.php"
      );
      this.products = response.data;
    },
    viewDetails(id) {
      this.$router.push(`/details/${id}`);
    },
  },
};
</script>

<style lang="sass" scoped>
.custom-caption
  text-align: center
  padding: 8px
  color: white
  background-color: rgba(0, 0, 0, .3)
</style>
