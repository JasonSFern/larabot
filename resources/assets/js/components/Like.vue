<template>
<div class="like" @click="toggle">
    <span v-if="dataLiked">unlike</span>
    <span v-else>like</span>
</div>
</template>

<script>

import axios from 'axios'

export default {
  name: 'like',
  props: ['articleId', 'liked'],
  data: function() {
      return {
          dataLiked: true
      }
  },
  methods: {
      toggle:function() {
          this.dataLiked = !this.dataLiked
          axios.get('/articles/' + this.articleId + '/like/toggle')
    }
  }
}

</script>

<style lang='css'>
  .like {
    cursor:pointer;
  }
</style>
