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
<h2><center>NAATI CCL Practise Test Material - Nepali</center></h2><br>
<section class="pricing py-5">
  <div class="container">
    <div class="row">
      <!-- Free Tier -->
      <div class="col-lg-3">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Exam repeated IMP words and phrases</h5>
            <hr>
              <ul class="fa-ul">
               <li><span class="fa-li"><i class="fas fa-check"></i></span>Legal Terms</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Medical Terms</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Finance and Banking</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Business Terms</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Housing Terms</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Education Terms</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Employement Terms</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Social Welfare Terms</li>
               <li><span class="fa-li"><i class="fas fa-check"></i></span>Immigration Terms</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Ethics Terms</li>
            </ul>
           <a href="<?php echo base_url();?>User/load_nepali_vocab?name=Nepali vocabulary" class="btn btn-block btn-primary text-uppercase">View</a>
      
          </div>
        </div>
      </div>
      <!-- Plus Tier -->
      <div class="col-lg-3">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Practice Material 1</h5>
            <hr>
            <ul class="fa-ul">
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Opening a Bank Account</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Exam repeated question</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Covers concept related Banking</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Translation provided from Nepali to English</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Translation provided from English to Nepali</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Difficulty level- Low</li>
               <br>
                <br>
              
            </ul>
            <a href="<?php echo base_url();?>User/load_nepali_pm1?name=Practise Material 1" class="btn btn-block btn-primary text-uppercase">View</a>
         </form>
          </div>
        </div>
      </div>
      <!-- Plus Tier -->
      <div class="col-lg-3">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Practice Material 2</h5>
            <hr>
              <ul class="fa-ul">
            <li><span class="fa-li"><i class="fas fa-check"></i></span>Enquiry related to University Admission</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Exam repeated question</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Covers concept related Education</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Translation provided from Nepali to English</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Translation provided from English to Nepali</li>
                   <li><span class="fa-li"><i class="fas fa-check"></i></span>Difficulty level- Medium</li>
               <br>
               
            </ul>
            <a href="<?php echo base_url();?>User/load_nepali_pm2?name=Practise Material 2" class="btn btn-block btn-primary text-uppercase">View</a>
            
            
         </form>
          </div>
        </div>
      </div>
      <!-- Plus Tier -->
      <div class="col-lg-3">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Practice Material 2</h5>
            <hr>
              <ul class="fa-ul">
            <li><span class="fa-li"><i class="fas fa-check"></i></span>Anti-Social Act in Locality</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Exam repeated question</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Covers concept related Social Welfare</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Translation provided from Nepali to English</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Translation provided from English to Nepali</li>
                   <li><span class="fa-li"><i class="fas fa-check"></i></span>Difficulty level- High</li>
             <br>
                <br>
            </ul>
            <a href="<?php echo base_url();?>User/load_nepali_pm3?name=Practise Material 3" class="btn btn-block btn-primary text-uppercase">View</a>
            
            
         </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


