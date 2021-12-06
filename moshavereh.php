<?php include_once('./header.php');?>


<!--start-moshavereh-form-->
<div class="container-fluid">
    <div class="container">
        <div class="row">
           
                <h5 class="text-center p-5 coustom-form-moshavereh">
                  <span class="py-5 position-relative">فرم مشاوره</span>
                </h5>
                </div>
                <p class="mb-4 p-moshavereh">جهت مشاوره اطلاعات خود را به طور دقیق وارد کنید  تا مشاوران ما در اسرع وقت با شما تماس بگیرند</p>
                <form class="row g-3 needs-validation d-flex justify-content-between align-items-center" novalidate>
                    <div class="col-lg-5 coustom-form">
                      <label for="validationCustom01" class="form-label">نام و نام خانوداگی  </label>
                      <input type="text" class="form-control" id="validationCustom01" placeholder="مثال : امین قرائت" required>
                      <div class="invalid-feedback">
                        لطفا فرم را پر کنید
                       </div>
                 
                    </div>
  
                    <div class="col-lg-5 coustom-form">
                      <label for="validationCustomUsername" class="form-label">شماره تماس</label>
                      <div class="input-group has-validation">
          
                        <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="مثال : 09171234567" required>
                        <div class="invalid-feedback">
                         لطفا شماره تلفن خود را به صورت صحیح وارد کنید
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-5 coustom-form ">
                      <label for="validationCustom04" class="form-label">موضوع مشاوره</label>
                      <select class="form-select" id="validationCustom04" required>
                        <option selected disabled value="">انتخاب کنید...</option>
                        <option>طراحی سایت ورد پرس</option>
                        <option>طراحی سایت شرکتی </option>
                        <option>طراحی سایت شخصی </option>
                        <option>طراحی سایت  پزشکی</option>
                        <option>مشاوره</option>
                        <option>سایر موارد</option>
          
                      </select>
                      <div class="invalid-feedback">
               لطفا یک مورد را انتخاب کنید
                      </div>
                    </div>
                    <div class="col-lg-5 coustom-form">
                      <label for="validationCustom05" class="form-label">جه زمانی را برای تماس مناسب میدانید؟</label>
                      <input type="text" class="form-control" id="validationCustom05" >
                    </div>
                    <div class="mb-3 coustom-form ">
                      <label for="exampleFormControlTextarea1" class="form-label"> اگر پیامی دارید وارد کنید</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="col-12 coustom-form">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                  من ربات نیستم
                        </label>
                      
              
                      </div>
                    </div>
                    <div class="col-12 mb-5 coustom-form">
                      <button class="btn btn-primary w-100" type="submit"> ارسال</button>
                    </div>
                  </form>
              </div>
    </div>
</div>
    <!--end-moshavereh-form-->

















<?php include_once('./footer.php');?>