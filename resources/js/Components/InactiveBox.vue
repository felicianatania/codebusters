<template>
    <div class="text-subheading w-10 h-10 border-2 border-gray flex items-center justify-center text-2xl text-gray font-bold">
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
  /* Add any additional styles specific to inactive h1 here */
  </style>
