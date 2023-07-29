<template>
    <div class="text-title w-16 h-16 bg-darkorange flex items-center justify-center text-2xl text-white font-bold">
      {{ number }}
    </div>
  </template>

  <script>
  export default {
    props: {
      number: {
        type: Number,
        required: true,
      },
    },
  };
  </script>

  <style>
  /* Add any additional styles specific to active h1 here */
  </style>
