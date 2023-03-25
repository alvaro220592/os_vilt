<template>
  <div class="flex h-screen">
    <!-- Sidebar -->
    <div
      class="bg-gray-900 text-white w-64 flex flex-col justify-between items-center transition-all duration-300"
      :class="{ '-translate-x-full': !isOpen }"
    >
      <!-- Sidebar content -->
      <div class="w-full h-full flex flex-col justify-between">
        <nav class="mt-8">
          <ul>
            <li>
              <Link
                to="/dashboard"
                class="block py-2 px-4 hover:bg-gray-700 transition duration-300"
              >
                Dashboard
              </Link>
            </li>
            <li>
              <Link
                to="/users"
                class="block py-2 px-4 hover:bg-gray-700 transition duration-300"
              >
                Users
              </Link>
            </li>
            <li>
              <Link
                to="/settings"
                class="block py-2 px-4 hover:bg-gray-700 transition duration-300"
              >
                Settings
              </Link>
            </li>
          </ul>
        </nav>

        <button
          class="block py-2 px-4 text-left hover:bg-gray-700 transition duration-300"
          @click="isOpen = !isOpen"
        >
          Toggle Sidebar
        </button>
      </div>
    </div>

    <!-- Main content -->
    <div class="flex-1 bg-gray-100">
      <router-link :to="selectedTab" class="absolute top-4 right-4">
        Close
      </router-link>
      <component :is="selectedTab"></component>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue'
import { Link } from '@inertiajs/vue3'

const isOpen = ref(true)
const selectedTab = ref('dashboard')

// export { isOpen, selectedTab, Link }
</script>

<style>
/* ... */
</style>