<template>
    <div
      :class="{ 'active-box': isActive, 'inactive-box': !isActive }"
      @click="toggleActive"
    >
      <span :class="{ 'active-text': isActive, 'inactive-text': !isActive }">
        {{ isActive ? 'Active Box' : 'Inactive Box' }}
      </span>
    </div>
  </template>

  <script>
  export default {
    data() {
      return {
        isActive: false,
      };
    },
    methods: {
      toggleActive() {
        this.isActive = !this.isActive;
      },
    },
  };
  </script>

  <style>
  .active-box,
  .inactive-box {
    display: inline-block;
    width: 200px;
    height: 100px;
    border: 2px solid black;
    text-align: center;
    cursor: pointer;
  }

  .active-box {
    background-color: orange;
  }

  .inactive-box {
    background-color: transparent;
  }

  .active-text {
    color: white;
  }

  .inactive-text {
    color: black;
  }
  </style>
