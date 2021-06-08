<?php
require('top.php');
?>
    <main class="bg-gray-50">
      <div class="lg:grid lg:grid-cols-3 ml-16 inline-block">
        <div
          class="col-span-2 text-green-900 border-gray-900 border-b-2 lg:border-r-2 w-full"
        >
          <h2 class="font-bold text-xl font-sans">Confirm and Pay</h2>
          <h4>2 Items</h4>
          <div class="mt-4 mr-5 lg:grid lg:grid-cols-2 lg:gap-10 inline-block">
            <div class="card text-left mb-10 lg:mb-0 w-10/12 lg:w-auto">
              <img
                class="card-img-top "
                src="img/photo-1438761681033-6461ffad8d80.jpg"
                alt=""
              />
              <div class="card-body">
                <h4 class="card-title font-serif font-extrabold text-lg">
                  Red Gown
                </h4>
                <p class="card-text text-black flex justify-between mr-6">
                  Nrs.3000/-
                </p>
              </div>
            </div>
            <div class="card text-left mb-10 lg:mb-0 w-10/12 lg:w-auto">
              <img
                class="card-img-top "
                src="img/photo-1438761681033-6461ffad8d80.jpg"
                alt=""
              />
              <div class="card-body">
                <h4 class="card-title font-serif font-extrabold text-lg">
                  Red Gown
                </h4>
                <p class="card-text text-black flex justify-between mr-6">
                  Nrs.3000/-
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-span-1 ml-5 font-sans mr-10 mt-8">
          <form action="" class="bg-gray-100 inline-block rounded-xl">
            <h2 class="text-black lg:text-2xl font-bold mt-7 ml-12 text-xl">
              Guest Checkout
            </h2>
            <p class="mt-3 ml-12 mr-4 mb-6">
              No need to create account. Just fill the form and pay on Delivery
            </p>
            <div class="form-group ml-8 mr-10 mb-8">
              <label for="" class="lg:text-2xl text-xl">Full Name :</label>
              <input
                type="text"
                class=" rounded-md form-control w-full h-10 border-green-900 border-2 pl-5"
                name=""
                id=""
                placeholder="Full Name"
              />
            </div>
            <div class="form-group ml-8 mb-8">
              <label for="" class="lg:text-2xl text-xl">Phone Number :</label> <br />
              
              <select
                name=" country"
                id="country"
                class="h-10 rounded-md border-green-900 border-2 pl-1"
              >
                <option selected value="+977">+977</option>
                <option value="+91">+91</option>
                <option value="+81">+81</option>
              </select>
              <input
                type="tel"
                class="
                  form-control
                  -ml-2
                  mr-5
                  
                  w-8/12
                  sm:w-9/12
                  md:w-9/12
                  lg:w-8/12
                  h-10  rounded-md
                  border-green-900 border-2
                  pl-5
                "
                name=""
                id=""
                placeholder="**********"
              />
            
            </div>
            <div class="form-group ml-8 mr-10 mb-8">
              <label for="" class="lg:text-2xl md:text-xl text-lg">Location :</label>
              <input
                type="text"
                class="form-control w-full lg:h-10 h-7 rounded-md border-green-900 border-2 pl-5"
                name=""
                id=""
                placeholder="Location :"
              />
            </div>
          </form>
          <form action="#"  class="bg-gray-100 rounded-xl mt-5">
              <div class="flex justify-between p-7">
                  <h2>Total:</h4>
                <h5>Nrs. 6000/-</h5>

              </div>
              <div class="flex justify-between pl-7 pr-7 pb-7">
                  <h2>Delivery Fee:</h4>
                <h5>Nrs. 6000/-</h5>

              </div>
              <div class="text-center  lg:w-7/12 mx-auto w-5/12   ">
              <button type="button" name="" id="" class="rounded-full border-green-900 border-2 lg:text-2xl text-xl font-bold text-green-900 w-full h-10  hover:bg-green-900 hover:text-white ">Confirm</button>
            </div>
          </form>
        </div>
      </div>
    </main>
<?php
require('bottom.php');
?>
