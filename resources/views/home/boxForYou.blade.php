<?php
$locale = session()->get('locale', 'th');
?>
<section class="pt-30 pb-0">
    <div class="bgc-thm-light mr-auto ml-auto max-width1460-con  pt60-lg pb60-lg bdr-24 position-relative overflow-hidden mx20-lg">
            <div class="card bg-color-b border border border-0">
                <div class="row no-gutters ">
                  <div class="col-md-6 col-lg-5 col-12  md-pl-30 xs-pl-15 order-md-last">
                    <img src="{{ asset('/assets/images/photo-1512917774080-9991f1c4c750.jpg')}}" class="img-fluid w-100 h-100 object-fit">
                  </div>
                  <div class="col-md-6 col-lg-7 md-pl-30 xs-pl-15 md-pt-10 md-pl-20">
                    <div class="card-body row justify-content-md-center justify-content-center ">
                        <div class="why-chose-list style2 pt-30 sm-pt-0 pb-30 sm-pb-0 md-pl-15 md-pr-15 lg-pr-30 lg-pl-30 s-321">
                            <h2 class="card-title text-capitalize mb-30">{{ GoogleTranslate::trans('เรามาค้นหา', $locale) }}<br class="d-none d-md-block">{{ GoogleTranslate::trans('ตัวเลือกการขายที่เหมาะกับคุณ กันดีกว่า', $locale) }}</h2>
                            <div class="list-one d-flex align-items-start mb-30"> 
                                <i class="list-icon flex-shrink-0 fa-solid fa-user-shield"></i>
                                <div class="list-content flex-grow-1 ml-20">
                                    <h6 class="mb-1">{{ GoogleTranslate::trans('การจัดการทรัพย์สิน', $locale) }}</h6>
                                    <p class="card-text mb-0 fs-15">Nullam sollicitudin blandit eros eu pretium. Nullam maximus ultricies auctor.</p>
                                </div> 
                            </div>
                            <div class="list-one d-flex align-items-start mb-30"> 
                                <i class="list-icon flex-shrink-0 fa-solid fa-key"></i>
                                <div class="list-content flex-grow-1 ml-20">
                                    <h6 class="mb-1">{{ GoogleTranslate::trans('บริการจำนอง', $locale) }}</h6>
                                    <p class="card-text mb-0 fs-15">Nullam sollicitudin blandit eros eu pretium. Nullam maximus ultricies auctor.</p>
                                </div> 
                            </div>
                            <div class="list-one d-flex align-items-start mb-30"> 
                                <i class="list-icon flex-shrink-0 fa-solid fa-sack-dollar"></i>
                                <div class="list-content flex-grow-1 ml-20">
                                    <h6 class="mb-1">{{ GoogleTranslate::trans('บริการด้านสกุลเงิน ', $locale) }}</h6>
                                    <p class="card-text mb-0 fs-15">Nullam sollicitudin blandit eros eu pretium. Nullam maximus ultricies auctor.</p>
                                </div> 
                            </div>
                            <div class="mobile-b">
                                <a class="user-arrow user-btn btn-yuudee learn-more rounded-pill text-a ptr-7" href="#">{{ GoogleTranslate::trans('เพิ่มเติม', $locale) }}
                                    <i class="fa-solid fa-arrow-right fa-lg"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
    </div>

</section>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script>
$('.changeLanguage').change(function(event){
    var url = "{{ route('google.translate.change') }}";
    window.location.href = url+"?lang="+$(this).val()
})
</script>