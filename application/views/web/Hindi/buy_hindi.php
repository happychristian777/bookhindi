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
  width:50%;
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
        

 <center> 
     <div class="card">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">HINDI</h5>
          <h6 class="card-price text-center">$20</h6>
            <p class="text-center"></p>
            <hr>
            <ul class="fa-ul">
            <li><span class="fa-li"></span><i class="fas fa-check"> Exam repeated important words and phrases</i></li>
              <li><span class="fa-li"></span><i class="fas fa-check"> Practice Material 1</i></li>
              <li><span class="fa-li"></span><i class="fas fa-check"> Practice Material 2</i></li>
              <li><span class="fa-li"></span><i class="fas fa-check"> Practice Material 3</i></li>
                <li><span class="fa-li"></span><i class="fas fa-check"> Mock Test - 1  </i> </li>
               <li><span class="fa-li"></span><i class="fas fa-check"> Mock Test - 2</i></li>
              <li><span class="fa-li"></span><i class="fas fa-check"> Mock test -3</i></li>
            </ul>
            <a href="<?php echo base_url();?>User/load_pm_hindi?name=Hindi Practise Material" class="btn btn-block btn-primary text-uppercase">Buy Now</a><br>
             <form method="post" action="<?php echo base_url();?>User/bypass_pm_hindi">
            <input type="submit" style="width:50%;" class="btn btn-danger btn-block" data-dismiss="modal" value="Already paid"> 
          </div>
        </div>
 
   </center>
 
   

</div>
  </section>
  