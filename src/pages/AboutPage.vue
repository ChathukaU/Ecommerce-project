<template>
  <q-page class="q-pa-md">
    <q-card>
      <q-card-section>
        <div class="text-h6">About Us</div>
      </q-card-section>

      <q-separator />

      <q-card-section>
        <div class="text-subtitle1">Our Mission</div>
        <p>
          Our mission is to provide the best products and services to our
          customers. We strive for excellence and aim to exceed expectations
          with every interaction.
        </p>
      </q-card-section>

      <q-separator />

      <q-card-section>
        <div class="text-subtitle1">Our Values</div>
        <ul>
          <li>Integrity</li>
          <li>Customer Satisfaction</li>
          <li>Innovation</li>
          <li>Teamwork</li>
        </ul>
      </q-card-section>

      <q-separator />

      <q-card-section>
        <div class="text-subtitle1">Our Team</div>
        <q-list bordered class="rounded-borders q-mt-md">
          <q-item
            v-for="member in team"
            :key="member.id"
            v-ripple
            class="q-pa-sm"
          >
            <q-item-section avatar>
              <q-avatar>
                <img
                  :src="`http://localhost/ecommerce/images/${member.photo}`"
                  alt="Team Member Photo"
                />
              </q-avatar>
            </q-item-section>
            <q-item-section>
              <q-item-label>{{ member.name }}</q-item-label>
              <q-item-label caption>{{ member.position }}</q-item-label>
            </q-item-section>
          </q-item>
        </q-list>
      </q-card-section>

      <q-separator />

      <q-card-section>
        <div class="text-subtitle1">Contact Us</div>
        <p>If you have any questions, feel free to contact us:</p>
        <ul>
          <li>Email: info@example.com</li>
          <li>Phone: +1 234 567 890</li>
          <li>Address: 1234 Street Name, City, Country</li>
        </ul>
      </q-card-section>
    </q-card>
  </q-page>
</template>

<script>
export default {
  data() {
    return {
      team: [
        {
          id: 1,
          name: "John Doe",
          position: "CEO",
          photo: "john_doe.jpg",
        },
        {
          id: 2,
          name: "Jane Smith",
          position: "CTO",
          photo: "jane_smith.jpg",
        },
        {
          id: 3,
          name: "Sara Lee",
          position: "CFO",
          photo: "sara_lee.jpg",
        },
        {
          id: 4,
          name: "Michael Brown",
          position: "COO",
          photo: "michael_brown.jpg",
        },
      ],
    };
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
