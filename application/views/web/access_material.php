<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-184736136-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-184736136-1');
</script>
<style>
.add_space {
    margin-left:18px;
}section.pricing {
  background: #000080;
  background: linear-gradient(to right, #6f42c1, #e83e8c);
}

.pricing .card {
  border: none;
  border-radius: 1rem;
  transition: all 0.2s;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.pricing hr {
  margin: 1.5rem 0;
}

.pricing .card-title {
  margin: 0.5rem 0;
  font-size: 0.9rem;
  letter-spacing: .1rem;
  font-weight: bold;
}

.pricing .card-price {
  font-size: 3rem;
  margin: 0;
}

.pricing .card-price .period {
  font-size: 0.8rem;
}

.pricing ul li {
  margin-bottom: 1rem;
}

.pricing .text-muted {
  opacity: 0.7;
}

.pricing .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  opacity: 0.7;
  transition: all 0.2s;
}

/* Hover Effects on Card */

@media (min-width: 992px) {
  .pricing .card:hover {
    margin-top: -.25rem;
    margin-bottom: .25rem;
    box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.3);
  }
  .pricing .card:hover .btn {
    opacity: 1;
  }
}
</style>


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">	
<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->
	<section class="pricing py-5">
	    <div class="container">
         <div class="row">
<div id="sync2" class=" owl-carousel owl-theme">
    <div class="item" style="margin-right:10px;">
         <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Tamil</h5>
            <h6 class="card-price text-center">$10</h6>
             
             <hr>
            <ul class="fa-ul">
             <li><span class="fa-li"><i class="fas fa-check"></i></span>Exam repeated important words and phrases</li>
             <li><span class="fa-li"><i class="fas fa-check"></i></span>Practice Material 1</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Practice Material 2</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Practice Material 3</li>
             <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Mock Test - 1 (coming soon)  </li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Mock Test - 2 (coming soon) </li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Mock test -3 (coming soon) </li>
            </ul>
            <a href="<?php echo base_url();?>User/load_pm_tamil?name=Tamil Practise Material" class="btn btn-block btn-primary text-uppercase">Buy Now</a><br>
            <form method="post" action="<?php echo base_url();?>User/bypass_pm_tamil">
            <input type="submit" style="" class="btn btn-danger btn-block" data-dismiss="modal" value="Already paid"> 
         </form>
          </div>
        </div>
  </div>
     <div class="item" style="margin-right:10px;">
    <!-- <h1>2</h1> -->
    <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Punjabi</h5>
            <h6 class="card-price text-center">$20</h6>
              
            <hr>
            <ul class="fa-ul">
             <li><span class="fa-li"><i class="fas fa-check"></i></span>Exam repeated important words and phrases</li>
               <li><span class="fa-li"><i class="fas fa-check"></i></span>Practice Material 1</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Practice Material 2</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Practice Material 3</li>
             <li><span class="fa-li"><i class="fas fa-check"></i></span>Mock Test - 1</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Mock Test - 2 (coming soon) </li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Mock test -3 (coming soon) </li>
            </ul>
          <a href="<?php echo base_url();?>User/load_pm_punjabi?name=Punjabi Practise Material" class="btn btn-block btn-primary text-uppercase">Buy Now</a><br>
            <form method="post" action="<?php echo base_url();?>User/bypass_pm_punjabi">
            <input type="submit" style="" class="btn btn-danger btn-block" data-dismiss="modal" value="Already paid"> 
         </form>
          </div>
        </div>
  </div>
  <div class="item" style="margin-right:10px;">
     <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">HINDI</h5>
           <h6 class="card-price text-center">$20</h6>
            
            <hr>
            <ul class="fa-ul">
            <li><span class="fa-li"><i class="fas fa-check"></i></span>Exam repeated important words and phrases</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Practice Material 1</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Practice Material 2</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Practice Material 3</li>
               <li><span class="fa-li"><i class="fas fa-check"></i></span>Mock Test - 1   </li>
               <li><span class="fa-li"><i class="fas fa-check"></i></span>Mock Test - 2</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Mock test -3</li>
            </ul>
            <a href="<?php echo base_url();?>User/load_pm_hindi?name=Hindi Practise Material" class="btn btn-block btn-primary text-uppercase">Buy Now</a><br>
            <form method="post" action="<?php echo base_url();?>User/bypass_pm_hindi">
            <input type="submit" style="" class="btn btn-danger btn-block" data-dismiss="modal" value="Already paid"> 
          </div>
        </div>
  </div>
  
  
   <div class="item" style="margin-right:10px;">
     <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Urdu</h5>
           <h6 class="card-price text-center">$10</h6>
           
            <hr>
            <ul class="fa-ul">
             <li><span class="fa-li"><i class="fas fa-check"></i></span>Exam repeated important words and phrases</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Practice Material 1</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Practice Material 2</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Practice Material 3</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Mock Test - 1 (coming soon)  </li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Mock Test - 2 (coming soon) </li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Mock test -3 (coming soon) </li>
            </ul>
            <a href="<?php echo base_url();?>User/load_pm_urdu?name=Urdu Practise Material" class="btn btn-block btn-primary text-uppercase">Buy Now</a><br>
            <form method="post" action="<?php echo base_url();?>User/bypass_pm_urdu">
            <input type="submit" style="" class="btn btn-danger btn-block" data-dismiss="modal" value="Already paid"> 
         </form>
          </div>
        </div>
  </div>
  <div class="item" style="margin-right:10px;">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Nepali</h5>
            <h6 class="card-price text-center">$10</h6>
             
            <hr>
            <ul class="fa-ul">
             <li><span class="fa-li"><i class="fas fa-check"></i></span>Exam repeated important words and phrases</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Practice Material 1</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Practice Material 2</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Practice Material 3</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Mock Test - 1 (coming soon)  </li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Mock Test - 2 (coming soon) </li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Mock test -3 (coming soon) </li>
            </ul>
            <a href="<?php echo base_url();?>User/load_pm_nepali?name=Nepali Practise Material" class="btn btn-block btn-primary text-uppercase">Buy Now</a><br>
            <form method="post" action="<?php echo base_url();?>User/bypass_pm_nepali">
            <input type="submit" style="" class="btn btn-danger btn-block" data-dismiss="modal" value="Already paid"> 
         </form>
          </div>
        </div>
  </div>
  <div class="item" style="margin-right:10px;">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">GUJARATI</h5>
            <h6 class="card-price text-center">$10</h6>
              
             <hr>
            <ul class="fa-ul">
             <li><span class="fa-li"><i class="fas fa-check"></i></span>Exam repeated important words and phrases</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Practice Material 1</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Practice Material 2</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Practice Material 3</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Mock Test - 1</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Mock Test - 2 </li>
             <li><span class="fa-li"><i class="fas fa-check"></i></span>Mock test -3</li>
            </ul>
            <a href="<?php echo base_url();?>User/load_pm_indonesian?name=Indonesian Practise Material" class="btn btn-block btn-primary text-uppercase">Buy Now</a><br>
            <form method="post" action="<?php echo base_url();?>User/bypass_pm_indonesian">
            <input type="submit" style="" class="btn btn-danger btn-block" data-dismiss="modal" value="Already paid"> 
         </form>
          </div>
        </div>
  </div>
</div>
 </div>
</div>
  </section>
  <script>
    jQuery(document).ready(function() {
    var sync1 = jQuery("#sync1");
    var sync2 = jQuery("#sync2");
    var slidesPerPage = 4; //globaly define number of elements per page
    var syncedSecondary = true;

    sync2
      .owlCarousel({
      items: 1,
      slideSpeed: 3000,
      nav: true,

      //   animateOut: 'fadeOut',
      animateIn: "fadeIn",
      autoplayHoverPause: true,
      autoplaySpeed: 1400, //過場速度
      dots: false,
      loop: true,
      responsiveClass: true,
      responsive: {
        0: {
          item: 1,
          autoplay: true
        },
        600: {
          items: 3,
          autoplay: true
        }
      },
      responsiveRefreshRate: 200,
      navText: [
        '<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>',
        '<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'
      ]
    })
      .on("changed.owl.carousel", syncPosition);

    sync2
      .on("initialized.owl.carousel", function() {
      sync2
        .find(".owl-item")
        .eq(0)
        .addClass("current");
    })
      .owlCarousel({
      items: slidesPerPage,
      dots: true,
      //   nav: true,
      smartSpeed: 1000,
      slideSpeed: 1000,
      slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
      responsiveRefreshRate: 100
    })
      .on("changed.owl.carousel", syncPosition2);

    function syncPosition(el) {
      //if you set loop to false, you have to restore this next line
      //var current = el.item.index;

      //if you disable loop you have to comment this block
      var count = el.item.count - 1;
      var current = Math.round(el.item.index - el.item.count / 2 - 0.5);

      if (current < 0) {
        current = count;
      }
      if (current > count) {
        current = 0;
      }

      //end block

      sync2
        .find(".owl-item")
        .removeClass("current")
        .eq(current)
        .addClass("current");
      var onscreen = sync2.find(".owl-item.active").length - 1;
      var start = sync2
      .find(".owl-item.active")
      .first()
      .index();
      var end = sync2
      .find(".owl-item.active")
      .last()
      .index();

      if (current > end) {
        sync2.data("owl.carousel").to(current, 100, true);
      }
      if (current < start) {
        sync2.data("owl.carousel").to(current - onscreen, 100, true);
      }
    }

    function syncPosition2(el) {
      if (syncedSecondary) {
        var number = el.item.index;
        sync1.data("owl.carousel").to(number, 100, true);
      }
    }

    //sync2.on("click", ".owl-item", function(e) {
     // e.preventDefault();
      //var number = jQuery(this).index();
    //  sync1.data("owl.carousel").to(number, 300, true);
   // });
  });
</script>


