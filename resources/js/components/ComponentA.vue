<template>
  <div class="container border-l border-r border-t border-gray-300">
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
                <label class="text-sm">Assigned Vendor</label>
                <div class="selectdiv w-full">
                  <select class="rounded text-sm">
                      <option>Amarit & Associates Logistics Co Ltd</option>
                  </select>
                </div>
              </div>
              <div class="input-gruop w-[20%] mr-3">
                <label class="text-sm">Attention Of</label>
                <input type="text" class="text-sm w-full px-3 py-3 bg-gray-100 rounded" placeholder="Attention Of" value="John Smith">
              </div>
              <div class="input-gruop w-[20%] mr-3">
                <label class="text-sm">Quatation No</label>
                <input type="text" class="text-sm w-full px-3 py-3 bg-gray-100 rounded" placeholder="Quatation No" value="ABC-123-01">
              </div>
              <div class="input-gruop w-[20%]">
                <label class="text-sm">Invoice To</label>
                <div class="selectdiv w-full">
                  <select class="rounded text-sm">
                      <option>MITO</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="input-gruop w-full">
                <label class="text-sm">Vendor Address</label>
                <input type="text" class="text-sm w-full px-3 py-3 bg-gray-100 rounded" placeholder="Vendor Address" value="Marubeni-Itochu">
              </div>
          </div>
          <div class="w-[18%] pl-1.5">
              <div class="input-gruop w-full mb-3">
                <label class="text-sm">Customer - Contract</label>
                <div class="selectdiv w-full">
                  <select class="rounded text-sm">
                      <option>ADNOC-ONSHORE</option>
                  </select>
                </div>
              </div>
              <div class="input-gruop w-full">
                <label class="text-sm">Customer PO No.</label>
                <div class="selectdiv w-full">
                  <select class="rounded text-sm">
                      <option>A123XXHTA0192</option>
                  </select>
                </div>
              </div>
          </div>
        </div>
  </div>
</template>

<script>
  import '@fortawesome/fontawesome-free/css/all.css';

  export default {
      name: 'ComponentA',
      mounted() {
            console.log('Component mounted.')
        }
  }
</script>