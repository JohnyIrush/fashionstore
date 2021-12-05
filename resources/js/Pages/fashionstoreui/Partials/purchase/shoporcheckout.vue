<template>
<div class="modal fade" id="shop-check" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
       <div class="alert alert-white" role="alert">
          <p  class="text-success success-msg">Your Product was Added To the cart successfully!</p>
       </div>
      </div>
      <div class="modal-footer">
             <button @click="goToRequest(1)" type="button" class="shadow p-2 mb-2  rounded col-xs-12 col-sm-12 col-md-12 col-lg-12 btn btn-warning" data-dismiss=""> <i class="fa fa-shopping-bag" aria-hidden="true"></i> Continue Shopping </button>
             <button @click="goToRequest(2)" type="button" class="shadow p-2 mb-2  rounded col-xs-12 col-sm-12 col-md-12 col-lg-12 btn btn-success"> <i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Cheackout </button>
      </div>
    </div>
  </div>
</div>
</template>

<script>
export default {
  data () {
    return {
    }
  },
  methods: {
   goToRequest(request){
      if (request==1) {
        window.location.replace('/shop');
      }else{
        window.location.replace('/cart');
      }
   }
  },
  mounted(){
    
  }
}
</script>

<style>
  .success-msg{
    font-family: 'Times New Roman', Times, serif;
    font-size: 20px;
  }
</style>