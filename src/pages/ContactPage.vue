<template>
  <q-page class="q-pa-md">
    <q-card>
      <q-card-section>
        <div class="text-h6">Contact Us</div>
      </q-card-section>

      <q-separator />

      <q-card-section>
        <div class="text-subtitle1">Contact Information</div>
        <ul>
          <li>Email: info@example.com</li>
          <li>Phone: +1 234 567 890</li>
          <li>Address: 1234 Street Name, City, Country</li>
        </ul>
      </q-card-section>

      <q-separator />

      <q-card-section>
        <div class="text-subtitle1">Send Us a Message</div>
        <q-form @submit="submitForm">
          <q-input
            v-model="formData.name"
            label="Your Name"
            outlined
            dense
            required
          />
          <q-input
            v-model="formData.email"
            label="Your Email"
            type="email"
            outlined
            dense
            required
          />
          <q-input
            v-model="formData.subject"
            label="Subject"
            outlined
            dense
            required
          />
          <q-input
            v-model="formData.message"
            label="Message"
            outlined
            type="textarea"
            dense
            required
          />
          <q-btn
            type="submit"
            label="Submit"
            color="primary"
            class="q-mt-md"
            :loading="loading"
            :disable="!formValid"
          />
        </q-form>
      </q-card-section>
    </q-card>
  </q-page>
</template>

<script>
export default {
  data() {
    return {
      formData: {
        name: "",
        email: "",
        subject: "",
        message: "",
      },
      loading: false,
    };
  },
  computed: {
    formValid() {
      const { name, email, subject, message } = this.formData;
      return name && email && subject && message;
    },
  },
  methods: {
    submitForm() {
      if (this.formValid) {
        // Send form data to your backend or handle it accordingly
        console.log("Form submitted:", this.formData);
        // Reset form data
        this.formData = {
          name: "",
          email: "",
          subject: "",
          message: "",
        };
      } else {
        console.error("Form is not valid");
      }
    },
  },
};
</script>

<style scoped>
p {
  margin: 0;
  padding: 0;
}
ul {
  padding-left: 1rem;
}
</style>
