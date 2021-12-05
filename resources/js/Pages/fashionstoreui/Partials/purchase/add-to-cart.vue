<template>

</template>

<script>
export default {
  data () {
    return {
    }
  },
  methods: {
      addToCart: function(id)
      {
          axios.post('/add-to-cart/' + id)
          .then((response)=>{
              $modal("#shop=check").show();
          })
      }
  },
  mounted(){
    
  }
}
</script>
