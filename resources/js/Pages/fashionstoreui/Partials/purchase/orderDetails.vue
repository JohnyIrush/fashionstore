<template>
<!-- Modal -->
<div class="modal fade" :id="'order-details' + orderId" tabindex="-1" aria-labelledby="order-detailsLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content main-theme-tertiary-bg-color">
      <div class="modal-header">
        <h5 class="modal-title text-white" id="exampleModalLabel">Order Details</h5>
        <button type="button" class="btn-close text-secondary-color" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     <div class="card Theme-two ml-1 pl-1 customer-profile-pages main-theme-tertiary-bg-color">
      <div class="row mt-1 m-0 justify-content-center mt-2">
          <div  class="col-sm-12">
            <div class="card customer-profile-bg-color main-theme-sec-bg-color">
              <div class="card-body">
                <div class="row justify-content-center main-theme-sec-bg-color">
                    <div class="col-sm-12">
                     <div class="card Theme" >
                         <div class="card-header main-theme-sec-bg-color">
                             <div class="card-title text-white">Order  </div>
                         </div>
                         <ul class="list-group Theme list-group-flush main-theme-sec-bg-color text-white"  >
                           <li class="list-group-item Theme main-theme-sec-bg-color text-white">
                            <table class="table Theme">
                              <thead>
                                <tr>
                                  <th class="heading-color text-white" scope="col">Product Id</th>
                                  <th class="heading-color text-white" scope="col">Thumbnail</th>
                                  <th class="heading-color text-white" scope="col">Product</th>
                                  <th class="heading-color text-white" scope="col">Price</th>
                                  <th class="heading-color text-white" scope="col">Quantity</th>
                                  <th class="heading-color text-white" scope="col">Subtotal</th>
                                  <th class="heading-color text-white" scope="col">Total Quantity</th>
                                  <th class="heading-color text-white" scope="col">Total Price</th>
                                </tr>
                              </thead>
                              <tbody >
                                <tr class="" v-for="item in order.items" :index="index">
                                  <th class="text-white" scope="row"> {{item.item.id}}  </th>
                                  <td class="text-white"> <img :src="'/Images/Fashions/' + item.item.images[0].thumbnail"> </td>
                                  <td class="text-white">{{item.item.name}}</td>
                                  <td class="text-white">{{item.item.price}}</td>
                                  <td class="text-white">{{item.qty}}</td>
                                  <td class="text-white">{{item.price}}</td>
                                  <td class="text-white"></td>
                                  <td class="text-white"></td>
                                </tr>
                                <tr class="" >
                                  <th scope="row">  </th>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td class="text-white">{{order.totalQty}}</td>
                                  <td class="text-white">{{order.totalPrice}}</td>
                                </tr>
                              </tbody>
                            </table>
                           </li>
                         </ul>
                     </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <!--<div v-if="orders.length==0" class="col-sm-9 ">
            <div class="card customer-profile-bg-color">
              <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-sm-12">
                             <div class="card-text text-center text-info profile-credit-info">
                                 <p> You currently have not made any Orders</p>
                             </div>
                             <div class="card-text text-center text-success profile-credit-info">
                                 <p>All Your Orders  will be displayed here</p>
                             </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-sm-12">
                             <div class="card-text text-center text-success profile-credit-info">
                                 <a href="/shop" class="btn btn-secondary text-warning col-sm-7"> <i class="fa mr-2 fa-shopping-basket" aria-hidden="true"></i> Continue Shopping </a>
                             </div>
                        </div>
                    </div>
              </div>
            </div>
          </div>-->
      </div>
     </div> 
    </div>
  </div>
</div>
</template>

<script>
export default {
    props: {
        order: Object,
        orderId: Number 
    },
  watch: {
  },
    data() {
        return {
            orders: [],
            items: [],
        }
    },
    methods: {
    //fetch orders
    /*
    async getOrders(){
        const res = await this.callApi('get','getorders');
        this.orders = res.data;
        for (let index = 0; index < res.data.length; index++) {
            
           this.items.push(res.data[index].order.items);
           
        }

        
    },
    */
    },
    mounted() {
      console.log("Hizi Orders");
      console.log((this.order.items));
    },
}
</script>

<style>
    
</style>