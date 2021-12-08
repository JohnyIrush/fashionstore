<template>
    <app-layout  title="Dashboard">
        <Header />
        <!--<template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>-->
        <div class="main-theme-tertiary-bg-color">
          <div class="py-12">
              <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                  <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                      <Orders />
                  </div>
              </div>
          </div>
        </div>
        <Footer />
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import Welcome from '@/Jetstream/Welcome.vue'
    import Orders from './fashionstoreui/Partials/purchase/Orders'
    import Header from './fashionstoreui/Partials/Header'
    import Footer from './fashionstoreui/Partials/Footer'

    export default defineComponent({
        components: {
            AppLayout,
            Welcome,
            Orders,
            Header,
            Footer
        },
    })
</script>
