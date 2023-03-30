<template>
  <div class="container border-l border-r border-t border-gray-300 pb-2">
        <!-- <i class="fa-solid fa-truck"></i> -->
        <div class="flex items-center ml-2 mt-2">
          <div class="selectdiv w-[19%] mr-5">
            <i class="fa-solid fa-truck ml-3 text-[#00BFBF]"></i>
              <select class="rounded text-sm font-semibold">
                  <option>Logistic Instruction</option>
              </select>
          </div>
          <div class="w-[10%] bg-[#E5E5E5] text-center rounded-full text-sm">
            Draft
          </div>
        </div>

        <div class="w-full flex align-center p-3">
          <div class="w-[18%]">
          </div>
          <div class="w-[64%] pr-1.5">
            <div class="flex align-center w-full mb-3">
              <div class="input-gruop w-[40%] mr-3">
                <SelectInputComponent
                  textLabel="Assigned Vendor"
                  defaultOption="Amarit & Associates Logistics Co Ltd"
                  name="assignedVendor"
                />
              </div>
              <div class="input-gruop w-[20%] mr-3">
                <InputComponent 
                  textLabel="Attention Of" 
                  type="text" 
                  inputClasses="text-sm w-full px-3 py-3 bg-gray-100 rounded" 
                  name="attentionOf" 
                  placeholder="Attention Of" 
                  value="John Smith" 
                />
              </div>
              <div class="input-gruop w-[20%] mr-3">
                <InputComponent 
                  textLabel="Quatation No" 
                  type="text" 
                  inputClasses="text-sm w-full px-3 py-3 bg-gray-100 rounded" 
                  name="quatationNo" 
                  placeholder="Quatation No" 
                  value="ABC-123-01" 
                />
              </div>
              <div class="input-gruop w-[20%]">
                <SelectInputComponent
                  textLabel="Invoice To"
                  defaultOption="MITO"
                  name="invoiceTo"
                />
              </div>
            </div>
            <div class="input-gruop w-full">
                <InputComponent 
                  textLabel="Vendor Address" 
                  type="text" 
                  inputClasses="text-sm w-full px-3 py-3 bg-gray-100 rounded" 
                  name="vendroAddress" 
                  placeholder="Vendor Address" 
                  value="Marubeni-Itochu" 
                />
            </div>
          </div>
          <div class="w-[18%] pl-1.5">
              <div class="input-gruop w-full mb-3">
                <SelectInputComponent
                  textLabel="Customer - Contract"
                  defaultOption="ADNOC-ONSHORE"
                  name="customerContract"
                />
              </div>
              <div class="input-gruop w-full">
                <SelectInputComponent
                  textLabel="Customer PO No."
                  defaultOption="A123XXHTA0192"
                  name="customerPO"
                />
              </div>
          </div>
        </div>
  </div>
</template>

<script>
  import '@fortawesome/fontawesome-free/css/all.css';
  import InputComponent from './InputComponent.vue';
  import SelectInputComponent from './SelectInputComponent.vue';

  export default {
      name: 'ComponentA',
      components: {
        'InputComponent': InputComponent,
        'SelectInputComponent': SelectInputComponent,
      },
      mounted() {
            console.log('Component mounted.')
        }
  }
</script>

<style scoped>
.selectdiv {
    position: relative;
    display: flex;
    align-items: center;
    background-color: #F3F4F6;
    border-radius: 0.25rem;
    /*Don't really need this just for demo styling*/
}
  
.selectdiv:after {
    content: '\f078';
    font: normal normal normal 14px/1 FontAwesome;
    color: #B2B9C0;
    right: 12px;
    display: block;
    position: absolute;
    pointer-events: none;
}
  
  /* IE11 hide native button (thanks Matt!) */
  select::-ms-expand {
    display: none;
  }

  .selectdiv select {
    position: relative;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    /* Add some styling */
    padding: 0.75rem;
    display: block;
    width: 100%;
    background-image: none;
    background-color: #F3F4F6;
    -ms-word-break: normal;
    word-break: normal;
  }

  select:focus {
    border: none;
  }

</style>