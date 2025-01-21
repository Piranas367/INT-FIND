<script setup>
import CustomButton from '../components/CustomButton.vue';
import Navigation from '../components/Navigation.vue';
import { ref } from 'vue';

// Dropdown settings
const selectedSetting = ref('settings');
const settings = [
  { value: 'home', text: 'Home' },
  { value: 'settings', text: 'Settings' },
  { value: 'chat', text: 'Chat'}
];
</script>

<template>
     <div class="w-screen h-screen bg-gray-100 flex flex-col">
    <!-- Header -->
    <header class="w-full bg-white p-4 shadow-md flex justify-between items-center">
      <h1 class="text-blue-600 font-bold text-2xl">Intfind</h1>
      <input
        type="text"
        placeholder="Search..."
        class="border border-gray-300 rounded px-3 py-2 w-1/3"
      />
      <!-- Dropdown Section -->
    <div>
        <select
          id="settings"
          v-model="selectedSetting"
          class="bg-white border border-gray-300 rounded px-3 py-2"
        >
          <option v-for="option in settings" :key="option.value" :value="option.value">
            {{ option.text }}
          </option>
        </select>
      </div>
    </header>
  
      <!-- Main Section -->
      <section class="flex-grow flex items-center justify-center overflow-y-auto p-4">
        <div class="h-auto flex items-center justify-center flex-col gap-4 border-2 border-gray-300 rounded w-80 p-4">
        <Navigation></Navigation>
  
        <!-- School Content -->
        <div class="relative flex flex-col items-left p-4 text-sm">
          <h2 class="text-lg font-semibold mt-4">Mijn Opleiding</h2>
          <p class="text-gray-500 mt-2 leading-relaxed">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus porro culpa sunt voluptates libero blanditiis at.
          </p>
          <p class="text-gray-500 mt-2 leading-relaxed">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur numquam eum repellat? Ipsa illum natus labore dolorum rem aliquid error nisi aspernatur cum.
          </p>
        </div>
      </div>
      </section>

      <footer class="w-full bg-white p-4 shadow-md flex justify-around items-center">
        <CustomButton icon="❌" color="bg-red-800" />
        <CustomButton icon="🤖" color="bg-yellow-500" />
        <CustomButton icon="✅" color="bg-green-700" />
      </footer>
    </div>
  </template>
  

  
  <style>
  html,
  body {
    margin: 0;
    padding: 0;

    overflow: hidden; /* Verwijdert scrollen volledig */
  }
  </style>
  