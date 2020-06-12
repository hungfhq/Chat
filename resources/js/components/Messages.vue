<template>
    <div>
      <li class="list-group-item" :class="liClass"><slot></slot></li>
      <span class="badge float-right" :class="badgeClass">{{ user }}</span>
      <span class="badge float-right" :class="badgeClass">{{ time }}</span>
    </div>
</template>

<script>
    export default {
      props: [
        'color',
        'user',
        'time'
      ],
      computed: {
        liClass() {
          return 'list-group-item-'+this.color;
        },
        badgeClass() {
          return 'badge-'+this.color;
        }
      },
      mounted() {
          console.log('Messages component mounted.')
      }
    }
</script>
