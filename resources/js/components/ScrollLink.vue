<template>
    <a :href="href" @click.prevent="scroll">
        <slot></slot>
    </a>
</template>

<script>
  export default {
      props: ['href'],
      name: "ScrollLink",
      methods: {
          scroll() {
              document.querySelector(this.href)
                      .scrollIntoView({ behavior: 'smooth'});
          }
      }
  }
</script>

<style scoped>

</style>
